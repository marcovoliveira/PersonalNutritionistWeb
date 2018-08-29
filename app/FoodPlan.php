<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodPlan extends Model
{
    //
    protected $guarded = [];

	public function user()
    {
        return $this->hasMany('App\User', 'food_plan_id');
    }

    protected $table = 'food_plan';
}
