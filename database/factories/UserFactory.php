<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\UserEcommerce::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'type' => 'client',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'title' => $title,
        'description' => $faker->text(200),
        'pricing' => 100.00,
        'slug' => str_slug($title),
        'seo_title' => $title,
        'seo_keywords' => $title,
        'seo_description' => $faker->text(200),
        'user_id' => $faker->numberBetween(1, 2),
        'category_id' => $faker->numberBetween(1, 6),
    ];
});

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'name' => 'product.jpeg',
        'alt' => 'product',
        'path' => asset('img/product.jpeg'),
        'morphic_type' => 'product',
    ];
});
