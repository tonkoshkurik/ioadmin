<?php

namespace App\Http\Controllers;

use Backpack\Settings\app\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Order;
use Backpack\MenuCRUD;
use App\LiqPay;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    //
  protected $public_key;
  protected $private_key;

  function __construct() {
    $this->public_key = Setting::where('key', 'public_key')->value('value');
    $this->private_key = Setting::where('key', 'private_key')->value('value');
  }

  public function checkout(Request $request)
  {
    $validatedData = request()->validate([
      'name' => 'required|max:255',
      'phone' => 'required',
      'email' => 'required|email',
      'address' => 'required|min:3',
      'payment' => 'required',
      'delivery' => 'required',
      'products' => 'required',
      'comment' => 'nullable',
      'call' => 'nullable',
    ], [
      'name' => 'Поле имя обязятально',
      'phone' => 'Поле телефон обязятально',
      'email' => 'Поле email обязятально',
      'address' => 'Поле адресс обязятально',
    ]);

    function count_products_price($products){
      $sum = 0;
      foreach ($products as $product){
        $p = \App\Models\Product::where('id', $product['id'])->first();
        $product_price = $p->discount_price ? $p->discount_price : $p->base_price;
        $sum = $sum + $product_price;
      }
      return $sum;
    }

    $order = Order::firstOrCreate(
      [
        'lead' => collect($validatedData)->only('name', 'email', 'phone', 'address', 'payment')->toArray(),
        'order' => collect($validatedData['products'])->toArray()
      ],
      [
        'delivery' =>  $validatedData['delivery'],
        'call' => (boolean) $validatedData['call'],
        'sum' => count_products_price($validatedData['products'])
      ]
    );


    if($validatedData['payment'] === 'liqpay') {
      $liqpay = new LiqPay($this->public_key, $this->private_key);

      $liqpay_form = $liqpay->cnb_form(array(
        'action'         => 'pay',
        'amount'         => $order->sum,
        'currency'       => 'UAH',
        'description'    => sprintf('Оплата заказа # %d', $order->id ),
        'order_id'       =>  $request->order_id,
        'version'        => '3',
        'result_url'     => url('/checkout/order/' . $order->id ),
        'sandbox'        => '1',
        'server_url'     => url('/checkout/payed')
      ));

      return response($liqpay_form, 200)->header('Content-Type', 'text/html');

      return view('shop.liqpay', compact('order', 'liqpay_form'));
    }


   return  response()->json($order->id);
  }


  public function order($id){
    $this->data['title'] = "Оформление заказа";
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    $this->data['order'] = Order::find($id);
    return view('shop.order', $this->data);
  }



  public function liqpay(Request $request)
  {
    $order = Order::find((int)$request->id);

    if($request->payment = "liqpay" ) {
      $liqpay = new LiqPay($this->public_key, $this->private_key);

      $html = $liqpay->cnb_form(array(
        'action'         => 'pay',
        'amount'         => $order->sum,
        'currency'       => 'UAN',
        'description'    => sprintf('Оплата заказа # %d', $order->id ),
        'order_id'       =>  $request->order_id,
        'version'        => '3',
        'result_url'     => url('/order/' . $order->id ),
        'sandbox'        => '1',
        'server_url'     => url('/checkout/payed')
      ));

      // And client send this facking form
    }
   // let's make the order from route we getting post reqest with nonce
  }

  // Liqpay callback for payed Orders
  public function payed(Request $request)
  {
    $data = base64_decode($request->data);
    $sign = base64_encode( sha1( $this->private_key . $request->data . $this->private_key, 1) );

    if($request->signature == $sign){
      // Send to AMO
    }
  }

}
