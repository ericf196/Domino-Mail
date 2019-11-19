<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'ericf196@gmail.com',
            'password' => bcrypt('password'),
            'league_id' => 0,
            'team_id' => 0,
            'nombres' => 'Eric Alexander',
            'apellidos' => 'Freitez Osorio',
            'city' => 'Barquisimeto',
            'state' => 'Lara',
            'cedula' => '19614974',
            'telefono' => '04145667384'
        ]);
    }
}
