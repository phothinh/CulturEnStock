<?php

namespace Database\Seeders;

use App\Models\Abonnement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonnementTableSeeder extends Seeder
{

    static $abonnements = [
        [
            'Pass Culturel individuelle Adulte',
            12,
        ],
        [
            'Pass Culturel couple',
            20,
        ],
        [
            'Pass Culturel jeune',
            5,
        ],
        [
            'Adhésion parrainée',
            5,
        ]

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        foreach (self::$abonnements as list($title, $price)) {
                DB::table('abonnements')->insert([
                    'title' => $title,
                    'price' => $price
                ]);
        }

    }
}
