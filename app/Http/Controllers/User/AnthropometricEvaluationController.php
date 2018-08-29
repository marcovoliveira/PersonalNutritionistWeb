<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\AnthropometricEvaluation;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnthropometricEvaluationController extends Controller
{

    public function __construct()
    {

        $this->middleware('admin');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       if (Session::has('key')) 
       {
           $tipo = false;
            $user = Session::get('key');
            return view('admin.registar.anthropometricevaluation', compact('user', 'tipo'));
       }

        return redirect('admin/home');
    }

    //Consultas
    public function createNew($id)
    {
        $user = User::
        with('AnthropometricEvaluation', 'FoodPlan', 'FoodAnamnesis', 'UserPersonalInformation')
            ->where('id', $id)
            ->first();

        $tipo = true;

        return view('admin.registar.anthropometricevaluation', compact('user', 'tipo'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      
        $user = Session::get('key'); 
        if(!$user){
            $user = User::findOrFail($id);
        }

            $perimetrocintura = $request['perimetrocintura'];
            $peso = $request['peso']; 
            $altura = $request['altura'];
            $atividade = $request['atividadefisica'];
            $alturaMetros = $altura/100;
            $altura_quadrado = $alturaMetros * $alturaMetros;
            $result = $peso/$altura_quadrado;
            $imc = $result;
            $age = Carbon::parse($user->birthday)->age;
            $risco = "Normal"; 


            if($user->genre == 'M'){

                $basal = 66 + (13.8 * $peso) + (5 * $altura) - (6.8 * $age);

                if($perimetrocintura > 94 && $perimetrocintura <= 102){
                    $risco = "Risco +"; 
                }
                if($perimetrocintura > 102){
                    $risco = "Risco ++"; 
                }

            } else {

                $basal = 664 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $age);

                if($perimetrocintura > 80 && $perimetrocintura <= 88){
                    $risco = "Risco +"; 
                }
                if($perimetrocintura > 88){
                    $risco = "Risco ++"; 
                }
            }

            $energy = $basal * $atividade; 

            $hc_recomendado = ($energy * 0.5)/4; // 50% de Hidratos de carbono certo ? 
            $l_recomendado = ($energy * 0.3)/9; // 30% Lipidos
            $p_recomendado = ($energy * 0.2)/4;  // 20% HC

         $anthropometricevaluation = AnthropometricEvaluation::create([
            'user_id' => $user->id,
            'height' => $altura,
            'weight' => $peso,
            'visceral_fat' => $request['gorduravisceral'],
            'fat_mass' => $request['massagorda'],
            'waist_perimeter' => $perimetrocintura,
            'hip_permieter' => $request['perimetroanca'],
            'physical_activity' => $atividade,
            'objectivity' => $request['objetivo'],
            'recomendations' => $request['alteracoes'],
            'imc' => $imc,
            'basal_metabolism' => $basal,
            'energy_needs' => $energy,
            'waist_perimeter_risk' => $risco,
            'hc_recomendation' => $hc_recomendado,
            'p_recomendation' => $p_recomendado,
            'f_recomendation' => $l_recomendado
        ]);

        $request->session()->flash('calculations', $anthropometricevaluation);

        $request->session()->put('key2', $user);

        return redirect('/admin/registar/foodplaning');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $consulta = AnthropometricEvaluation::findOrFail($request['id']);

        $user = User::findOrFail($id);


        //$personalInformation = UserPersonalInformation::where('user_id', $id)->first();

        $height = $request['height'];
        $weight = $request['weight'];
        $visceral_fat = $request['visceral_fat'];
        $fat_mass = $request['fat_mass'];
        $waist_perimeter = $request['waist_perimeter'];
        $hip_permieter = $request['hip_permieter'];

        $alturaMetros = $height/100;
        $altura_quadrado = $alturaMetros * $alturaMetros;
        $result = $weight/$altura_quadrado;
        $imc = $result;
        $age = Carbon::parse($user->birthday)->age;
        $risco = "Normal";


        if($user->genre == 'M'){

            $basal = 66 + (13.8 * $weight) + (5 * $height) - (6.8 * $age);

            if($waist_perimeter > 94 && $waist_perimeter <= 102){
                $risco = "Risco +";
            }
            if($waist_perimeter > 102){
                $risco = "Risco ++";
            }

        } else {

            $basal = 664 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);

            if($waist_perimeter > 80 && $waist_perimeter <= 88){
                $risco = "Risco +";
            }
            if($waist_perimeter > 88){
                $risco = "Risco ++";
            }
        }


        $energy = $basal * $consulta->physical_activity;

        $hc_recomendado = ($energy * 0.5)/4; // 50% de Hidratos de carbono certo ?
        $l_recomendado = ($energy * 0.3)/9; // 30% Lipidos
        $p_recomendado = ($energy * 0.2)/4;  // 20% HC



        $consulta->height = $height;
        $consulta->weight = $weight;
        $consulta->visceral_fat = $visceral_fat;
        $consulta->fat_mass = $fat_mass;
        $consulta->waist_perimeter = $waist_perimeter;
        $consulta->hip_permieter = $hip_permieter;
        $consulta->imc = $imc;
        $consulta->basal_metabolism = $basal;
        $consulta->energy_needs =  $energy;
        $consulta->waist_perimeter_risk = $risco;
        $consulta->hc_recomendation = $hc_recomendado;
        $consulta->p_recomendation = $l_recomendado;
        $consulta->f_recomendation = $p_recomendado;
        $consulta->recomendations = $request['recomendations'];


        $consulta->save();

        session()->flash('message', 'Valores da consulta editados com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
