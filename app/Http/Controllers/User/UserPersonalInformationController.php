<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\UserPersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserPersonalInformationController extends Controller
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
            $user = Session::get('key');
            return view('admin.registar.personalinformation', compact('user'));
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

        $user = Session::get('key'); 

         $personalinformation = UserPersonalInformation::create([
            'user_id' => $user->id,
            'week_schedule' => $request['horariosemana'],
            'weekend_schedule' => $request['horariofimsemana'],
            'clinical_situation' => $request['situacaoclinica'],
            'clinical_analysis' => $request['analisesclinicas'],
            'intestinal_transit' => $request['transitointestinal'],
            'digestive_complaints' => $request['quexiasdigestivas'],
            'alergies_intolerances' => $request['alergiasintolerancias'],
            'hydration' => $request['hidratacao'],
            'physical_exercise' => $request['atividadefisica'],
            'exercice_frequency' => $request['frequenciaexercicio'],
            'weekend_food' => $request['alimentacaofimdesemana'],
            'most_confection' => $request['confecoesutilizadas'],
            'alcohol_consume' => $request['bebidasalcolicas'],
            'candys_frequency' => $request['frequenciadoces'],
            'salty_food_frequency' => $request['frequenciasalgados'],
            'favorite_foods' => $request['alimentospreferidos'],
            'deprecated_foods' => $request['alimentospreteridos'],
            'observations' => $request['observacoes']
        ]);


        $request->session()->flash('key', $user);

        return redirect('/admin/registar/foodanamnesis');
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
