<?php

use App\Travels;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $new_travel = new Travels();
      $new_travel->destination = 'Olbia';
      $new_travel->country = 'Italy';
      $new_travel->description = 'Viaggio in Sardegna';
      $new_travel->preferred_season = 'Estate';
      $new_travel->nights = 12;
      $new_travel->stays = 'hotel';
      $new_travel->price = 150.20;
      $new_travel->is_available = true;
      $new_travel->save();
    }
}
