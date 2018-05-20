<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\MenuCRUD;
//use Backpack\NewsCRUD\app\Models\Article;
use App\Post;
use App\Models\Category;
use App\Helpers;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

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

    public function post($slug)
    {
          $post = Post::findBySlug($slug);

          $data = [
            'title' => $post->title,
            'menu' => MenuCRUD\app\Models\MenuItem::all(),
            'post' => $post,
          ];

          return view('blog.post', $data);
    }
    public function addcomment($post)
    {
      $r = request();
      if($r->text){ return response(200); }
      $validator = Validator::make($r->all(), [
                  'name' => 'required|min:3',
                  'email' => 'required|email',
                  'content' => 'required|min:5',
            ],
            [
                  'name.required' => 'Поле имя обязательно для заполнения',
                  'email.email' => 'Проверьте правильность ввода поля email',
                  'content.required' => 'Коментарий должен быть не менее 5-ти символов',
                  'name.min' => 'Поле имя должно содержать не менее 3-ех символов',
                  'email.required' => 'Поле имя обязательно для заполнения',
                  'content.min' => 'Коментарий должен быть не менее 5-ти символов'
            ]);

      if ($validator->fails()) {
            $flash = '<ul>';
            $errors = $validator->errors();
            // dd($errors->all());
            foreach ($errors->all() as $message) {
                  $flash .= '<li>' . $message . '</li>';
             }
            $flash .= '</ul>';
            flash($flash)->error();
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
      

      $post = Post::find($post);
      $comment = new Comment($r->all());
      $post->comments()->save($comment);
      flash('Коментарий успешно добавлен')->success();
      return redirect()->back()->with('success', ['Коментарий добавлен']);   
    }
}
