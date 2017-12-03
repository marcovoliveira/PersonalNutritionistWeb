<?php

namespace App;

use App\AnthropometricEvaluation;
use App\FoodAnamnesis;
use App\FoodPlan;
use App\UserPersonalInformation;
use App\Notifications\UserResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','birthday', 'genre', 'phone_number',
        'city', 'occupation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPassword($token));
    }

    public function AnthropometricEvaluation()
    {
        return $this->hasMany('App\AnthropometricEvaluation');
    }

    public function FoodPlan()
    {
        return $this->hasMany('App\FoodPlan');
    }

    public function FoodAnamnesis()
    {
        return $this->hasMany('App\FoodAnamnesis');
    }

    public function UserPersonalInformation()
    {
        return $this->hasMany('App\UserPersonalInformation');
    }
}
