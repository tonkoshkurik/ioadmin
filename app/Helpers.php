<?php

namespace App;

class Helpers {
  public static function trim_text($input, $length, $ellipses = true, $strip_html = true)
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
  public static function product_label($index)
  {
    switch ($index) {
      case 'top':
        return '<span class="label-product label-top">Tоп</span>';
        break;
      case 'new':
        return '<span class="label-product label-new">Новинка</span>';
        break;
      case 'discount':
        return '<span class="label-product label-discount">Скидка</span>';
        break;
      default:
        return null;
    }
  }
}