<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_days', function (Blueprint $table) {
            $table->id();
            $table->string('working_day_name');
            $table->bigInteger('days_id')->unsigned();
            $table->time('start_time');
            $table->time('end_time');
            $table->string('description');
            $table->bigInteger('status_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('days_id')->references('id')->on('weekdays')->cascadeOnDelete();
            $table->foreign('status_id')->references('id')->on('status')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_days');
    }
}
