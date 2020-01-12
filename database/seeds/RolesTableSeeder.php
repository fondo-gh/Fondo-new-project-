<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete table to reset id
        DB::table('roles')->truncate();

        Role::create(['name' => 'Super Administrator']);
        Role::create(['name' => 'Sub Administrator']);
    }
}
