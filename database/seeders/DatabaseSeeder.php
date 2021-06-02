<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
//        \App\Models\User::insert(
//            [
//                ['id' => 1, 'name' => "Mai",'email' => 'phammai@gmail.com', 'password' => '123456'],
//                ['id' => 2, 'name' => "Huy",'email' => 'huy@gmail.com', 'password' => '123456'],
//                ['id' => 3, 'name' => "A.Dũng", 'email' => 'dungdt@gmail.com', 'pasword' => '123456']
//            ]
//        );

        $this->call(UserSeeder::class);
    }
}
