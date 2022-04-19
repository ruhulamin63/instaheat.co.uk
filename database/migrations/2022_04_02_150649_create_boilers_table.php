<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boilers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('brand_name', 255)->nullable();
            $table->string('model_name', 255)->nullable();
            $table->string('type',255)->nullable();

            $table->string('central_heating_output', 255);
            $table->string('hot_water_flow_rate', 255);

            // $table->integer('extras')->default(0)->comment = '0. fernox 1. honeywell';

            $table->text('image',150)->nullable();

            $table->string('short_desc',5000)->nullable();
            $table->double('price_for_5_year', 50, 2)->nullable();
            $table->double('price_for_10_year', 50, 2)->nullable();
            
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
        Schema::dropIfExists('boilers');
    }
}
