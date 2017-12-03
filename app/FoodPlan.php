<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodPlan extends Model
{
    //
    protected $guarded = [];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $table = 'food_plan';
}
