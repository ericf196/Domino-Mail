<?php

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
        DB::table('roles')->insert([
            [
                'name' => 'administrador',
                'slug' => 'administrador',
                'description' => 'administrador'
            ],[
                'name' => 'admin_liga',
                'slug' => 'admin_liga',
                'description' => 'admin_liga'
            ],[
                'name' => 'jugador',
                'slug' => 'jugador',
                'description' => 'jugador'
            ]
        ]);
    }
}
