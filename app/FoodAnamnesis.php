<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodAnamnesis extends Model
{
    //
    protected $guarded = [];


	public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $table = 'food_anamnesis';
}
