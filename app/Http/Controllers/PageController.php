<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Post;
use Illuminate\Http\Request;
use Backpack\MenuCRUD;
use App\Models\Review;
use App\Models\ShopSlider;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
  public function index($slug = null)
  {
    $page = $slug ? Page::findBySlug($slug ) : Page::findBySlug('/');

    if (!$page)
    {
      abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
    }

    $this->data['title'] = $page->title;
    $this->data['page'] =  $page->withFakes();
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();

    $this->data['blog'] =  Post::all()->map(function($item){
      $item->except = $this->trim_text($item->content, 120);
      return $item;
    });

    // Only for HomePage
    if(!$slug){
      $this->data['blog'] = $this->data['blog']->take(3);
    }

    $this->data['reviews'] = Review::all();

    return view('pages.'.$page->template, $this->data);
  }

  public function reviews()
  {
    $page = Page::findBySlug('reviews');
    $this->data['title'] = $page->title;
    $this->data['page'] =  $page->withFakes();
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    $this->data['reviews'] = Review::all();

    return view('pages.reviews', $this->data);
  }

  public function shop($id=null)
  {
    $page = Page::findBySlug('shop');
    $this->data['title'] = $page->title;
    $this->data['page'] =  $page->withFakes();
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    $this->data['slider'] = ShopSlider::all();
    $this->data['products'] = Product::paginate(4);
    return view('shop.index', $this->data);
  }
  public function product($slug)
  {
    $product = Product::findBySlug($slug);
    if(!$product) abort(404);
    $this->data['title'] = $product->name;
    $this->data['product'] =  $product->withFakes();
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    return view('shop.product', $this->data);
  }


  public function checkout()
  {
    $this->data['title'] = "";
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    return view('shop.checkout', $this->data);
  }

  public function contacts()
  {
    $page = Page::findBySlug('kontakty');

    $this->data['title'] = $page->title;
    $this->data['page'] =  $page->withFakes();
    $this->data['menu'] =  MenuCRUD\app\Models\MenuItem::all();
    $this->data['body_class'] = 'contact';

    return view('pages.'.$page->template, $this->data);
  }

  private function trim_text($input, $length, $ellipses = true, $strip_html = true)
  {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }

    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
      return $input;
    }

    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);

    //add ellipses (...)
    if ($ellipses) {
      $trimmed_text .= '...';
    }

    return $trimmed_text;
  }
}
