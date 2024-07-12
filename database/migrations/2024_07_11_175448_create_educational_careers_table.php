<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_careers', function (Blueprint $table) {
            $table->id();
            $table->string('career_cod');
            $table->string('career_name');
            $table->string('career_alias');
            $table->string('career_type');
             $table->bigInteger('level_id')->unsigned();
            $table->string('career_grade');
            $table->string('career_legal');
            $table->string('career_description');
            $table->bigInteger('status_id')->unsigned();
            $table->timestamps();
            $table->foreign('level_id')->references('id')->on('education_leveles')->cascadeOnDelete();
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
        Schema::dropIfExists('educational_careers');
    }
}
