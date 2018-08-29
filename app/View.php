<?php

namespace App;


use App\User;
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

class View  {

    public function viewUsers()
    {
        $user = User::whereHas('chat')->with('chat')->get()
            ->sortByDesc(function($users) {
                return $users->chat->last()->created_at;
            });

        return $users3 = $user->take(3);
    }

    public function messageUsers()
    {
        return $mensagens = Chat::all()->sortByDesc('created_at');
    }

}
