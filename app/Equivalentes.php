<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equivalentes extends Model
{
    public function alimentos()
    {
        return $this->belongsTo('App\Alimentos');
    }

    protected $fillable = ['name', 'alimentos_id'];
}
