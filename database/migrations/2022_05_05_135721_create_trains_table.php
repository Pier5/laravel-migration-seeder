<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 50)->nullable();
            $table->smallInteger('train_carriage')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('deleated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
