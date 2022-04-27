<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('boiler_id')->references('id')->on('boilers')->comment = 'get boiler id';

            $table->string('customer_name', 255)->nullable();
            $table->string('customer_contact_number', 255)->nullable();
            $table->integer('year_warranty')->nullable();
            $table->integer('price')->nullable();

            $table->string('brand_name', 255)->nullable();
            $table->string('model_name', 255)->nullable();
            $table->string('type',255)->nullable();

            $table->string('central_heating_output', 255);
            $table->string('hot_water_flow_rate', 255);
            $table->string('short_desc',5000)->nullable();

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
        Schema::dropIfExists('orderdetails');
    }
}
