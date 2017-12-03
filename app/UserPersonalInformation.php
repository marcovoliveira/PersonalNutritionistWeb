<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPersonalInformation extends Model
{
    //
    protected $guarded = [];


	public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $table = 'user_personal_information';
}
