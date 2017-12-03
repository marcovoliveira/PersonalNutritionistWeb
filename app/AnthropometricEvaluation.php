<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnthropometricEvaluation extends Model
{
    //
    protected $guarded = [];


	public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $table = 'anthropometric_evaluation';
}
