<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('boiler_id')->references('id')->on('boilers')->comment = 'get boiler id';

            $table->string('customer_name', 255)->nullable();
            $table->string('customer_contact_number', 255)->nullable();
            $table->integer('year_warranty')->nullable();
            $table->integer('price')->nullable();

            $table->string('fuel_type', 255)->nullable();
            $table->string('boiler_type', 255)->nullable();

            $table->string('convert_combi_boiler', 255)->nullable()->comment = 'Yes or No';
            $table->string('under_a_carport', 255)->nullable()->comment = 'Yes or No';
            $table->string('thirty_cm_away_window', 255)->nullable()->comment = 'Yes or No';

            $table->string('moving_5_meter',255)->nullable()->comment = 'Yes or No';

            $table->string('fuel_come_out', 255)->nullable()->comment = 'Roof or Wall';
            $table->string('pitched_or_flat', 255)->nullable()->comment = 'Pitched or Flat';
            $table->string('house_live_in', 255)->nullable();
            $table->string('number_of_bedroom', 255)->nullable();
            $table->string('number_of_bathroom', 255)->nullable();

            $table->integer('status')->default(0)->comment = '0. Incomplete 1. Complete 2. Cancel';
            $table->integer('activeStatus')->nullable()->default(1)->comment = '1. Active 0. Delete';
            
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaire_answers');
    }
}
