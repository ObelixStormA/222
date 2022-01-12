<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDavomatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('davomats', function (Blueprint $table) {
            $table->id();
            $table->integer('kursant_id')->nullable();
            $table->integer('guruh_id')->nullable();
            $table->integer('teach_id')->nullable();
            $table->integer('kaf_id')->nullable();
            $table->integer('fan_id')->nullable();
            $table->string('davomat')->nullable();
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
        Schema::dropIfExists('davomats');
    }
}
