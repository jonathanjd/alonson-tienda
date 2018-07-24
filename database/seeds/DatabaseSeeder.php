<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ImageSeeder::class);
        factory(App\UserEcommerce::class, 50)->create();
        factory(App\Product::class, 50)->create()->each(function ($p) {
            $p->image()->save(factory(App\Image::class)->make());
        });
    }
}
