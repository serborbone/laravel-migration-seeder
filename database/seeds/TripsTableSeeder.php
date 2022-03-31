<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $trip = new Trip();

      $trip->name = 'Giordania: Petra, Deserto & Bubble Experience';
      $trip->country = 'Giordania';
      $trip->departure = '2022-10-10';
      $trip->days_duration = '8';
      $trip->price = '1890';
      $trip->guide_names = 'Nicolò Balini, Stefano Cantarini';
      $trip->description = 'Ci inoltreremo nella storia di Amman, nei colori del magico deserto del Wadi Rum dormendo negli UFO, coccolandoci nelle acque del Mar Morto scivolando poi lungo la gola che ci porterà davanti alla Porta del Tesoro di Petra';
      
      $trip->save();

      $trip = new Trip();

      $trip->name = 'Un viaggio di gruppo nel paradiso terrestre';
      $trip->country = 'Hawaii';
      $trip->departure = '2022-11-10';
      $trip->days_duration = '17';
      $trip->price = '3890';
      $trip->guide_names = 'Gianluca Cocquio, Carlo J Laurora';
      $trip->description = 'Uno dei viaggi più incredibili che possiate fare, un itinerario nuovissimo e studiato nei minimi particolari.';
      
      $trip->save();

      $trip = new Trip();

      $trip->name = "Perù: L'America degli Incas";
      $trip->country = 'Perù';
      $trip->departure = '2022-09-15';
      $trip->days_duration = '15';
      $trip->price = '3390';
      $trip->guide_names = 'Claudio Pellizeni, Stefano Cantarini, Nicolò Balini';
      $trip->description = 'Da Lima, la sua capitale, costeggeremo l’oceano Pacifico...

';
      
      $trip->save();


    }
}
