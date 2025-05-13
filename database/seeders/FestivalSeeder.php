<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Festival;

class FestivalSeeder extends Seeder
{
    public function run()
    {
        Festival::create(['name' => 'Tomorrowland','location' => 'Boom, België','date' => '2024-07-19','price' => 120.00]);
        Festival::create(['name' => 'Sziget Festival','location' => 'Boedapest, Hongarije','date' => '2024-08-10','price' => 95.00]);
        Festival::create(['name' => 'Coachella','location' => 'Indio, Verenigde Staten','date' => '2024-04-12','price' => 150.00]);
        Festival::create(['name' => 'Pinkpop','location' => 'Landgraaf, Nederland','date' => '2024-06-14','price' => 85.00]);
        Festival::create(['name' => 'Rock am Ring','location' => 'Nürburgring, Duitsland','date' => '2024-06-07','price' => 110.00]);
        Festival::create(['name' => 'Lollapalooza','location' => 'Chicago, VS','date' => '2024-07-28','price' => 130.00]);
        Festival::create(['name' => 'Primavera Sound','location' => 'Barcelona, Spanje','date' => '2024-06-01','price' => 100.00]);
        Festival::create(['name' => 'Exit Festival','location' => 'Novi Sad, Servië','date' => '2024-07-06','price' => 90.00]);
        Festival::create(['name' => 'Pukkelpop','location' => 'Kiewit, België','date' => '2024-08-15','price' => 105.00]);
        Festival::create(['name' => 'Lowlands','location' => 'Biddinghuizen, Nederland','date' => '2024-08-16','price' => 115.00]);
        Festival::create(['name' => 'Awakenings','location' => 'Spaarnwoude, Nederland','date' => '2024-07-13','price' => 95.00]);
        Festival::create(['name' => 'Mysteryland','location' => 'Haarlemmermeer, Nederland','date' => '2024-08-24','price' => 100.00]);
    }
}

