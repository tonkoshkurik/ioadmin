<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\MenuCRUD;
//use Backpack\NewsCRUD\app\Models\Article;
use App\Post;
use Backpack\NewsCRUD\app\Models\Category;
use App\Helpers;

class BlogController extends Controller
{
    public function index()
    {
      $posts = Post::paginate(4);
//      $posts = $posts->map(function($item){
//      $item->excerpt = Helpers::trim_text($item->content, 120);
//      return $item;
//    });
//      dd($posts);
      $data = [
        'title' => 'Блог',
        'menu' => MenuCRUD\app\Models\MenuItem::all(),
        'cats' => Category::all(),
        'posts' => Post::paginate(4),
//      ->map(function($item){
//          $item->excerpt = Helpers::trim_text($item->content, 120);
//          return $item;
//        }),
      ];

//      dd($data['posts']);

      return view('blog.index', $data);
    }
}
