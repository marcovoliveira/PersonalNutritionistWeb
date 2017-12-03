<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnthropometricEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthropometric_evaluation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('height', 6, 2)->nullable();
            $table->decimal('weight', 6, 2)->nullable();
            $table->decimal('visceral_fat', 6, 2)->nullable();
            $table->decimal('fat_mass', 6, 2)->nullable();
            $table->decimal('waist_perimeter', 6, 2)->nullable();
            $table->decimal('hip_permieter', 6, 2)->nullable();
            $table->decimal('physical_activity')->nullable();
            $table->text('objectivity')->nullable();
            $table->text('recomendations')->nullable();
            $table->decimal('imc', 6, 2)->nullable();
            $table->decimal('basal_metabolism', 6, 2)->nullable();
            $table->decimal('energy_needs', 6, 2)->nullable();
            $table->text('waist_perimeter_risk')->nullable();
            $table->decimal('hc_recomendation', 6, 2)->nullable();
            $table->decimal('p_recomendation', 6, 2)->nullable();
            $table->decimal('f_recomendation', 6, 2)->nullable();
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
        Schema::dropIfExists('anthropometric_evaluation');
    }
}
