<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Review_categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('review_categories')->insert(
        [
          ['name' => 'Фото'],
          ['name' => 'Отзывы'],
          ['name' => 'Видео']
        ]
      );

    }
}
