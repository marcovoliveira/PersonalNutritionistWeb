<?php

namespace App;

use App\AnthropometricEvaluation;
use App\Chat;
use App\FoodAnamnesis;
use App\FoodPlan;
use App\UserPersonalInformation;
use App\Notifications\UserResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;

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
        return $this->belongsTo('App\FoodPlan', 'food_plan_id', 'id');
    }

    public function FoodAnamnesis()
    {
        return $this->hasMany('App\FoodAnamnesis');
    }

    public function chatApi()
    {
        return $this->$this->hasMany('App\Chat');
    }


    public function chat()
    {
        $usersWithConversations = $this->hasMany('App\Chat')->orderBy('created_at', 'asc');
        return $usersWithConversations->orderBy('chat.created_at', 'asc');
    }


    public function UserPersonalInformation()
    {
        return $this->hasMany('App\UserPersonalInformation');
    }


    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }

    public function hasAnthropometricEvaluation(){

        return (bool) $this->AnthropometricEvaluation()->first();
    }

    public function hasFoodPlan(){

        return (bool) $this->FoodPlan()->first();
    }

    public function hasFoodAnamnesis(){

        return (bool) $this->FoodAnamnesis()->first();
    }

    public function hasUserPersonalInformation(){

        return (bool) $this->UserPersonalInformation()->first();
    }

    public function findUser($id){

        return  $this->name->where('id', $id);
    }

}
