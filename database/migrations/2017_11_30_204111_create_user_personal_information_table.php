<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('week_schedule')->nullable();
            $table->text('weekend_schedule')->nullable();
            $table->text('clinical_situation')->nullable();
            $table->text('clinical_analysis')->nullable();
            $table->text('intestinal_transit')->nullable();
            $table->text('digestive_complaints')->nullable();
            $table->text('alergies_intolerances')->nullable();
            $table->text('hydration')->nullable();
            $table->text('physical_exercise')->nullable();
            $table->text('exercice_frequency')->nullable();
            $table->text('weekend_food')->nullable();
            $table->text('most_confection')->nullable();
            $table->text('alcohol_consume')->nullable();
            $table->text('candys_frequency')->nullable();
            $table->text('salty_food_frequency')->nullable();
            $table->text('favorite_foods')->nullable();
            $table->text('deprecated_foods')->nullable();
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('user_personal_information');
    }
}
