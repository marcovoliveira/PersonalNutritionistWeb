<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentos extends Model
{
    public function equivalentes()
    {
        return $this->hasMany('App\Equivalentes');
    }

    protected $fillable = ['name'];
}
