<?php

use App\Travels;
use Illuminate\Database\Seeder;
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
     /*  $new_travel = new Travels();
      $new_travel->destination = 'Olbia';
      $new_travel->country = 'Italy';
      $new_travel->description = 'Viaggio in Sardegna';
      $new_travel->preferred_season = 'Estate';
      $new_travel->nights = 12;
      $new_travel->stays = 'hotel';
      $new_travel->price = 150.20;
      $new_travel->is_available = true;
      $new_travel->save(); */

      for ($i=0; $i<100; $i++){
        $new_travel = new Travels();
        $new_travel->destination = $faker->city();
        $new_travel->country = $faker->state();
        $new_travel->description = $faker->paragraph();
        $new_travel->preferred_season = $faker->month();
        $new_travel->nights = $faker->randomDigit();
        $new_travel->stays = $faker->word();
        $new_travel->price = $faker->randomFloat(2, 150, 900);
        $new_travel->is_available = $faker->boolean();
        $new_travel->save();
      }

      
    }
}
