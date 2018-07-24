<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category();
        $category->title = 'DVDS';
        $category->slug = str_slug('DVDS');
        $category->seo_title = 'DVDS';
        $category->seo_keywords = 'DVDS';
        $category->seo_description = 'DVDS';
        $category->save();

        $category = new Category();
        $category->title = 'VIDEOS EN LINEA';
        $category->slug = str_slug('VIDEOS EN LINEA');
        $category->seo_title = 'VIDEOS EN LINEA';
        $category->seo_keywords = 'VIDEOS EN LINEA';
        $category->seo_description = 'VIDEOS EN LINEA';
        $category->save();

        $category = new Category();
        $category->title = 'AUDIOS';
        $category->slug = str_slug('AUDIOS');
        $category->seo_title = 'AUDIOS';
        $category->seo_keywords = 'AUDIOS';
        $category->seo_description = 'AUDIOS';
        $category->save();

        $category = new Category();
        $category->title = 'LIBROS';
        $category->slug = str_slug('LIBROS');
        $category->seo_title = 'LIBROS';
        $category->seo_keywords = 'LIBROS';
        $category->seo_description = 'LIBROS';
        $category->save();

        $category = new Category();
        $category->title = 'DIVERSOS';
        $category->slug = str_slug('DIVERSOS');
        $category->seo_title = 'DIVERSOS';
        $category->seo_keywords = 'DIVERSOS';
        $category->seo_description = 'DIVERSOS';
        $category->save();

        $category = new Category();
        $category->title = 'CARTAS';
        $category->slug = str_slug('CARTAS');
        $category->seo_title = 'CARTAS';
        $category->seo_keywords = 'CARTAS';
        $category->seo_description = 'CARTAS';
        $category->save();
    }
}
