<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pais;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeder of Country
        Pais::create([
            'abreviatura' => "MZ",
            'name' => "Mozambique",
        ]);
        //Seeder of Country
        Pais::create([
            'abreviatura' => "ANG",
            'name' => "Angola",
        ]);
        Pais::create([
            'abreviatura' => "BR",
            'name' => "Brasil",
        ]);
        Pais::create([
            'abreviatura' => "PT",
            'name' => "Portugal",
        ]);
        Pais::create([
            'abreviatura' => "ING",
            'name' => "Inglaterra",
        ]);

        Pais::create([
            'abreviatura' => "ESPN",
            'name' => "Espanha",
        ]);
        Pais::create([
            'abreviatura' => "AG",
            'name' => "Argentina",
        ]);
    }
}
