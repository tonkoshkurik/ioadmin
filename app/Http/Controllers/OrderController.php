<?php

namespace App\Http\Controllers;

use Backpack\Settings\app\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Order;
use LiqPay;

class OrderController extends Controller
{
    //
  protected $public_key;
  protected $private_key;

  function __construct() {
//    $this->public_key = Setting::where('key', 'public_key')->value('value');
//    $this->private_key = Setting::where('key', 'private_key')->value('value');
  }

  public function checkout(Request $request)
  {
    $validatedData = request()->validate([
      'name' => 'required|max:255',
      'phone' => 'required',
      'email' => 'required',
      'address' => 'required|min:3',
      'payment' => 'required',
      'delivery' => 'required',
      'products' => 'required',
      'comment' => 'nullable',
      'call' => 'nullable',
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

//    $order->order = collect($validatedData['products'])->toArray();
//    $order->lead = collect($validatedData)->only('name', 'email', 'phone', 'address', 'payment')->toArray();
//    $order->delivery  = $validatedData['delivery'];
//    $order->status  = null;
//    $order->call = (boolean) $validatedData['call'];
//    $order->sum = count_products_price($validatedData['products']);
//    $order->save();

//    dd($order-id);

   return  response()->json($order->toArray());
  }


  public function order($id){
    Order::find($id);
  }



  public function liqpay(Request $request)
  {


//      'status',
//      'call'

    if($request->payment = "liqpay" ) {
      $liqpay = new LiqPay($this->public_key, $this->private_key);
      $html = $liqpay->cnb_form(array(
        'action'         => 'pay',
        'amount'         => '1',
        'currency'       => 'USD',
        'description'    => 'description text',
        'order_id'       => 'order_id_1',
        'version'        => '3'
      ));

      // And client send this facking form
    }
   // let's make the order from route we getting post reqest with nonce


  }
}
