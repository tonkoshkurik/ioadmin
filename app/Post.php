<?php
namespace App;
use App\Models\Article;
use App\Helpers;

class Post extends Article {

  protected $fillable = ['slug', 'title', 'content', 'image', 'status', 'category_id', 'featured', 'date',
    'thumb'];

  public function excerpt()
  {
    return Helpers::trim_text($this->content,120);
  }

  public function comments()
  {
      return $this->hasMany('App\Models\Comment', 'article_id');
  }

}