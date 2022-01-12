<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFanBiriktirishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fan_biriktirishes', function (Blueprint $table) {
            $table->id();
            $table->integer('fan_id');
            $table->integer('teacher_id');
            $table->integer('fan_soati');
            $table->integer('semestr');
            $table->integer('guruh_id');
            $table->integer('kafedra_id');
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
        Schema::dropIfExists('fan_biriktirishes');
    }
}
