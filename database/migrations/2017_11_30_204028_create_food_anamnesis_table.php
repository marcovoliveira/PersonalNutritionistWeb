<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodAnamnesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_anamnesis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->time('breakfast_hour')->nullable();
            $table->text('breakfast')->nullable();
            $table->time('morning_snack_hour')->nullable();
            $table->text('morning_snack')->nullable();
            $table->time('lunch_hour')->nullable();
            $table->text('lunch')->nullable();
            $table->time('snack_one_hour')->nullable();
            $table->text('snack_one')->nullable();
            $table->time('snack_two_hour')->nullable();
            $table->text('snack_two')->nullable();
            $table->time('diner_hour')->nullable();
            $table->text('diner')->nullable();
            $table->time('bedtime_snack_hour')->nullable();
            $table->text('bedtime_snack')->nullable();
            $table->text('snacks')->nullable();
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
        Schema::dropIfExists('food_anamnesis');
    }
}
