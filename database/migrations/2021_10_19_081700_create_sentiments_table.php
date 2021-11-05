<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentiments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('groupName');
            $table->char('negative');
            $table->char('positive');
            $table->char('overallPercentage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentiments');
    }
}