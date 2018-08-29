<?php

namespace App\Http\Controllers\User;

use App\User;
use App\FoodPlan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;



class FoodPlanController extends Controller
{

    public function __construct()
    {

        $this->middleware('admin');

    }

    public function pdf($id)
    {
        $plano = FoodPlan::findOrFail($id);

        $pdf = PDF::loadView('print.plano', compact('plano'));
        return $pdf->download('plano_'.$plano->name.'.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Vista da tabela de planos nutricionais
    public function index()
    {
        $plans = FoodPlan::with('user')->orderBy('updated_at', 'desc')->get();
        $users = User::all();
        return view('admin.plano.plan_dashboard')->with('plans', $plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {

        if (Session::has('key2') && Session::has('calculations'))
        {
        $user = Session::get('key2');
        $data = Session::get('calculations');
        $age = Carbon::parse($user->birthday)->age;
        $p = $data->p_recomendation; 
        $h = $data->hc_recomendation; 
        $f = $data->f_recomendation;
        $foodplans = FoodPlan::all();

        return view('admin.registar.foodplaning', compact('user', 'data', 'age', 'foodplans'));
        }

        return redirect('admin/home');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function updateUserFoodPlan(Request $request, $id)
    {

        if (Session::has('key2'))
        {
        $user = User::findOrFail($id);
        $user->food_plan_id = $request['food_plan_id'];
        $user->save();
        session()->flash('message', 'Plano nutricional associado com sucesso ao utente!');
        session()->flash('type', 'sucesso');

            $request->session()->forget('key2');
            return redirect('admin/home');
        }
        else {

            session()->flash('message', 'É necessario editar o utente para alterar o seu plano nutricional!');
            session()->flash('type', 'erro');
            return redirect('admin/home');
        }
    }

    public function storePlan(Request $request)
    {

          $foodplan = FoodPlan::create([
            'name' => $request['name'],
            'breakfast' => $request['pequenoalmoco'],
            'morning_snack' => $request['meiodamanhaum'],
            'morning_snack_one' => $request['meiodamanhadois'],
            'lunch' => $request['almoco'],
            'snack_one' => $request['lancheum'],
            'snack_two' => $request['lanchedois'],
            'diner' => $request['jantar'],
            'bedtime_snack' => $request['ceia'],
            'recomendations' => $request['recomendacoes']
          ]);

        if ($request->ajax()){

            return response()->json($foodplan, 200);
        }

        session()->flash('message', 'Plano nutricional criado com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/foodplans');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $id = $request->input('planId');
        $plan = FoodPlan::findOrFail($id);
        return $plan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|'
        ]);

        $foodplan = FoodPlan::findOrFail($id);
        $foodplan->update($request->all());

        if ($request->ajax()){

            return response()->json($foodplan, 200);
        }
        session()->flash('message', 'Plano nutricional editado com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/foodplans');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodplan = FoodPlan::findOrFail($id);
        $teste  = FoodPlan::findOrFail($id)->user()->get();

        if(count($teste)){
            session()->flash('message', 'Impossivel apagar um plano nutricional em uso!');
            session()->flash('type', 'erro');
            return redirect('admin/foodplans');
        }

        else {
            $foodplan->delete();
            session()->flash('message', 'Plano nutricional apagado com sucesso!');
            session()->flash('type', 'sucesso');
            return redirect('admin/foodplans');
        }


        //FoodPlan::destroy($id);

    }
}
