<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run(Faker $faker)
    {

        for ($i=0; $i < 15; $i++) { 
            $newTravel = new Travel();
            $newTravel->luogo = $faker->words();
            $newTravel->durata = $faker->randomDigitNotNull();
            $newTravel->struttura = $faker->words(2);
            $newTravel->num_persone = $faker->numberBetween(1, 4);
            $newTravel->descrizione = $faker->paragraph();
            $newTravel->costo = $faker->numberBetween(100, 300);
            $newTravel->save();
        }

    }
}
