<?php

use App\User;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $items = [
            ['name' => $faker->firstName, 'email' => $faker->email, 'password' => bcrypt('password'), 'league_id' => '2', 'team_id' => 0, 'nombres' => $faker->firstName . " " . $faker->firstName, 'apellidos' => $faker->lastName . " " . $faker->lastName, 'city' => $faker->city, 'state' => $faker->state, 'cedula' => $faker->randomNumber(8), 'url_image' => 'img/avatar.jpg', 'telefono' => $faker->tollFreePhoneNumber, 'team' => $faker->word, 'federation' => $faker->sentence( 2,  true), 'association' => $faker->sentence( 2,  true)],
            ['name' => $faker->firstName, 'email' => $faker->email, 'password' => bcrypt('password'), 'league_id' => '2', 'team_id' => 0, 'nombres' => $faker->firstName . " " . $faker->firstName, 'apellidos' => $faker->lastName . " " . $faker->lastName, 'city' => $faker->city, 'state' => $faker->state, 'cedula' => $faker->randomNumber(8), 'url_image' => 'img/avatar.jpg', 'telefono' => $faker->tollFreePhoneNumber, 'team' => $faker->word, 'federation' => $faker->sentence( 2,  true), 'association' => $faker->sentence( 2,  true)],
            ['name' => $faker->firstName, 'email' => $faker->email, 'password' => bcrypt('password'), 'league_id' => '2', 'team_id' => 0, 'nombres' => $faker->firstName . " " . $faker->firstName, 'apellidos' => $faker->lastName . " " . $faker->lastName, 'city' => $faker->city, 'state' => $faker->state, 'cedula' => $faker->randomNumber(8), 'url_image' => 'img/avatar.jpg', 'telefono' => $faker->tollFreePhoneNumber, 'team' => $faker->word, 'federation' => $faker->sentence( 2,  true), 'association' => $faker->sentence( 2,  true)],
        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
