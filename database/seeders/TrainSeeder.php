<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // riempio la tabella trains con 200 treni usando i fakers
        for($i = 0; $i < 200; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->data = $faker->dateTimeThisMonth();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->isbn10();
            $newTrain->numero_carrozze = $faker->numberBetween(10, 30);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
