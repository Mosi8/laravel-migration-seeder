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
            $newTravel->luogo = 'Milano';
            $newTravel->durata = $faker->numberBetween(1, 7);
            $newTravel->struttura = $faker->word();
            $newTravel->num_persone = $faker->numberBetween(1, 5);
            $newTravel->descrizione = $faker->paragraph();
            $newTravel->costo = $faker->numberBetween(100, 300);
            $newTravel->save();
        }

    }
}
