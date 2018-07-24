<?php

use Illuminate\Database\Seeder;
use App\UserEcommerce;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Dev
        $user = new UserEcommerce();
        $user->name = 'dev';
        $user->email = 'headjd@gmail.com';
        $user->password = bcrypt('123456789');
        $user->type = 'dev';
        $user->save();

        //User Admin
        $user = new UserEcommerce();
        $user->name = 'admin';
        $user->email = 'user@admin.com';
        $user->password = bcrypt('123456789');
        $user->type = 'admin';
        $user->save();
    }
}
