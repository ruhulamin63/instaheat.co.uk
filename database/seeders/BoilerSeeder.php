<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BoilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boilers')->insert([
            'brand_name' => 'Ideal',
            'model_name' => 'Logic-30',
            'type' => 'Combi',
            'central_heating_output' => '20.0 kW',
            'hot_water_flow_rate' => '9.9 ltr/min',
            // 'extras' => 0,
            'image' => null,
            'short_desc' => 'Includes VAT, fitting, filter and flushed & protected.',
            'price_for_5_year' => 1030,
            'price_for_10_year' => 2030,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
