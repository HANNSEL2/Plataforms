<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationLevelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_leveles', function (Blueprint $table) {
            $table->id();
            $table->string('level_name');
            $table->string('level_description');
            $table->bigInteger('status_id')->unsigned();
            $table->timestamps();
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
        Schema::dropIfExists('education_leveles');
    }
}
