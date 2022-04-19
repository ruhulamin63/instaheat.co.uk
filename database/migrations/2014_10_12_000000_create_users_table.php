<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('username', 150)->nullable();
            $table->string('password', 150)->nullable();
            $table->string('first_name', 150)->nullable();
            $table->string('last_name', 150)->nullable();

            $table->integer('status')->default(1)->comment = '1. Active 0. Deactive';
            
            $table->string('phone', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->text('image', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('division',150)->nullable();
            $table->string('country',150)->nullable();

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
        Schema::dropIfExists('users');
    }
}
