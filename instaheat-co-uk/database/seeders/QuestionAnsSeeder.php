<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionAnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire_answers')->insert([
            'customer_name' => 'Ruhue Amin',
            'customer_contact_number' => '017433698745',
            'fuel_type' => 'Gas',
            'boiler_type' => 'Standard',
            'convert_combi_boiler' => 'Yes',
            'under_a_carport' => 'Yes',
            'thirty_cm_away_window' => 'No',
            'moving_5_meter' => "Null",
            'fuel_come_out' => 'Wall',
            'pitched_or_flat' => "Null",
            'house_live_in'=> 'Terrace',
            'number_of_bedroom'=> '2',
            'number_of_bathroom'=> '3+',
            'status'=> 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
