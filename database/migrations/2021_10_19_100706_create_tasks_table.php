<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('nomi');
            $table->string('fan_id');
            $table->integer('kafedra_id');
            $table->integer('user_id');
            $table->integer('yonalish_id')->nullable();
            $table->integer('guruh_id');
            $table->integer('max_ball')->nullable();
            $table->date('dead_line');
            $table->string('path');
            $table->string('description')->nullable();
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('tasks');
    }
}
