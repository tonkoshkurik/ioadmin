<?php
namespace App;
use Backpack\NewsCRUD\app\Models\Article;
use App\Helpers;

class Post extends Article {

  public function excerpt()
  {
    return Helpers::trim_text($this->content,120);
  }
}