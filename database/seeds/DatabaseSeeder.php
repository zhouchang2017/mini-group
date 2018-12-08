<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

//        factory(App\User::class, 50)->create()->each(function ($user) {
//            $num = random_int(1, 8);
//            for ($i = 1; $i <= $num; $i++) {
//                $user->talks()->save(factory(App\Talk::class)->make());
//            }
//        });
        \App\Talk::all()->random(50)->each(function($talk){
            $faker = app('Faker\Generator');
            $talk->comment([
                'body'=>$faker->text(50)
            ],\App\User::all()->random());
        });

    }
}
