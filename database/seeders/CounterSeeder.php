<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Balcao;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add the data of Counters
        Balcao::create([
            'abreviatura' => "SBS",
            'name' => "Standard Bank sede",
        ]);

        Balcao::create([
            'abreviatura' => "SBF",
            'name' => "Standard Bank Feima",
        ]);

        Balcao::create([
            'abreviatura' => "SBR",
            'name' => "Standard Bank Rua da França",
        ]);

        Balcao::create([
            'abreviatura' => "SBBM",
            'name' => "Standard Bank Baia Mall",
        ]);

        Balcao::create([
            'abreviatura' => "SBI",
            'name' => "Standard Bank Incubator",
        ]);
    }
}
