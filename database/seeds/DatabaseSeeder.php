<?php

use App\Book;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
            ]);
        }
        User::truncate();
        User::create([
            'name' => 'Alex',
            'email' => 'alex@alex.com',
            'password' => Hash::make('pwdpwd'),
        ]);
    }
}
