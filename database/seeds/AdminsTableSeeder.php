<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create(
            [
                'name' => "John Doe",
                'email' => 'john@doe.com',
                'password' => bcrypt('password')
            ]
        );
    }
}
