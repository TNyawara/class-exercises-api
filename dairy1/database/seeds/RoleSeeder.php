<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        DB::table('roles')->insert([
            'name' =>'admin',
            'email' => 'Administrator',
            'created at' => now(),
            'updated at' => now(),
        ]);
        //manager
        DB::table('roles')->insert([
            'name' =>'manager',
            'email' => 'manager',
            'created at' => now(),
            'updated at' => now(),
        ]);
        //user(casuals)
        DB::table('roles')->insert([
            'name' =>'user',
            'email' => 'user',
            'created at' => now(),
            'updated at' => now(),
        ]);
        //cooperative-societies
        DB::table('roles')->insert([
            'name' =>'coop-soc',
            'email' => 'Cooperative Society',
            'isOrganization' =>true,
            'created at' => now(),
            'updated at' => now(),
        ]);
    }
}
