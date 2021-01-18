<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('background')->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('name1');
            $table->integer('value1');
            $table->string('name2');
            $table->integer('value2');
            $table->string('name3')->nullable();
            $table->integer('value3')->nullable();
            $table->string('name4')->nullable();
            $table->integer('value4')->nullable();
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
        Schema::dropIfExists('counters');
    }
}
