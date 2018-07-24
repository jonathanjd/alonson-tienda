<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $image = new Image();
        $image->name = 'dvd.jpeg';
        $image->alt = 'dvd';
        $image->path = asset('img/dvd.jpeg');
        $image->morphic_type = 'category';
        $image->morphic_id = 1;
        $image->save();

        $image = new Image();
        $image->name = 'video-online.jpg';
        $image->alt = 'video-online';
        $image->path = asset('img/video-online.jpg');
        $image->morphic_type = 'category';
        $image->morphic_id = 2;
        $image->save();

        $image = new Image();
        $image->name = 'audios.jpeg';
        $image->alt = 'audios';
        $image->path = asset('img/audios.jpeg');
        $image->morphic_type = 'category';
        $image->morphic_id = 3;
        $image->save();

        $image = new Image();
        $image->name = 'book.jpg';
        $image->alt = 'book';
        $image->path = asset('img/book.jpg');
        $image->morphic_type = 'category';
        $image->morphic_id = 4;
        $image->save();

        $image = new Image();
        $image->name = 'diversos.jpeg';
        $image->alt = 'diversos';
        $image->path = asset('img/diversos.jpeg');
        $image->morphic_type = 'category';
        $image->morphic_id = 5;
        $image->save();

        $image = new Image();
        $image->name = 'cartas.jpeg';
        $image->alt = 'cartas';
        $image->path = asset('img/cartas.jpeg');
        $image->morphic_type = 'category';
        $image->morphic_id = 6;
        $image->save();
    }
}
