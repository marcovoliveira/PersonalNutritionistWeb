<?php

namespace App\Http\Controllers\Api;

use App\FoodPlan;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Client;


class FoodPlanApiController extends Controller
{


    // Devolve o plano do utilizador
    public function index (){

        /*
        $id = Auth::user()->getAuthIdentifier();

        $user = User::find($id);

        $planID = $user->food_plan_id;

        $plan = FoodPlan::findOrFail($planID);
        */

        $plan = Auth::user()->FoodPlan()->get();

        $user[] = Auth::user();

        return response()->json(['data' => $plan, 'dataUser' => $user], 200, [], JSON_NUMERIC_CHECK);

    }

}
