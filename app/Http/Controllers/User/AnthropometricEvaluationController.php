<?php

namespace App\Http\Controllers\User;

use App\AnthropometricEvaluation;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnthropometricEvaluationController extends Controller
{
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

       // if (Session::has('key')) 
       // {
        //  $user = Session::get('key');
            return view('admin.registar.anthropometricevaluation', compact('user'));
       // }

      //  return redirect('admin/home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $user = Session::get('key'); 

        //$user = DB::table('user')->where('id', $user->id)->first();
            $perimetrocintura = $request['perimetrocintura'];
            $peso = $request['peso']; 
            $altura = $request['altura'];
            $atividade = $request['atividadefisica'];
            $altura_quadrado = $request['altura'] * $request['altura'];
            $result = $peso/$altura_quadrado; 
            $imc = $result*10000;
            $age = Carbon::parse($user->birthday)->age;
            

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
            $p_recomendado = ($energy * 0.2)/4;  // 

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


        $request->session()->flash('key', $user);

        return redirect('/admin/home');

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
        //
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
