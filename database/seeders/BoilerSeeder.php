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
            'short_desc' => 'Compact in size and fully modulating down to as low as 4.8kW, the Logic+ combi provides excellent energy savings making it the perfect choice for new boiler or boiler replacement installations.',
            'price_for_5_year' => 1830,
            'price_for_10_year' => 2030,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
