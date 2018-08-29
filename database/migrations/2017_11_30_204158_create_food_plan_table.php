<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('breakfast')->nullable();
            $table->text('morning_snack')->nullable();
            $table->text('morning_snack_one')->nullable();
            $table->text('morning_snack_two')->nullable();
            $table->text('lunch')->nullable();
            $table->text('snack_one')->nullable();
            $table->text('snack_two')->nullable();
            $table->text('diner')->nullable();
            $table->text('bedtime_snack')->nullable();
            $table->text('recomendations')->nullable();
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
        Schema::dropIfExists('food_plan');
    }
}
