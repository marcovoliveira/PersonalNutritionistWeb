<?php

namespace App\Http\Controllers\User;

use App\Chat;
use App\Http\Controllers\Controller;
use App\User;
use App\FoodPlan;
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

    //Devolver info para o admin dashboard
    public function index()
    {
        $users3 = User::whereHas('chat')->with('chat')->get()->take(3)
            ->sortByDesc(function($users) {
                return $users->chat->first()->created_at;
            });

        $mensagens = Chat::all()->sortByDesc('created_at');


        $users = User::with('FoodPlan')->orderBy('updated_at', 'desc')->get();
        return view('admin.home', compact('users', 'users3', 'mensagens'));

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


    public function createClinic(Request $request, $id)
    {
        UserPersonalInformation::create([
            'user_id' => $id,
            'clinical_situation' => $request['situacao_clinica'],
            'clinical_analysis' => $request['analises_clinicas'],
            'intestinal_transit' => $request['transito_intestinal'],
            'digestive_complaints' => $request['queixas_digestivas'],
            'alergies_intolerances' => $request['intolerancias_alimentares'],
            'hydration' => $request['hidratacao'],
        ]);


        session()->flash('message', 'Informação clinica do utente criada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }

    public function createNutritional(Request $request, $id)
    {


        UserPersonalInformation::create([
            'user_id' => $id,
            'weekend_food' => $request['ref_fim_semana'],
            'most_confection' => $request['conf_mais_utilizadas'],
            'alcohol_consume' => $request['bebidasalcolicas'],
            'candys_frequency' => $request['frequenciadoces'],
            'salty_food_frequency' => $request['frequenciasalgados'],
            'favorite_foods' => $request['alimentos_preferidos'],
            'deprecated_foods' => $request['alimentos_preteridos'],
            'observations' => $request['observacoes']
        ]);



        session()->flash('message', 'Informação nutricional do utente criada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }

    public function createActivities(Request $request, $id)
    {
       UserPersonalInformation::create([
            'user_id' => $id,
            'week_schedule' => $request['horario_semanal'],
            'weekend_schedule' => $request['horario_fim_semana'],
            'physical_exercise' => $request['exercicio_fisico'],
            'exercice_frequency' => $request['frequenciaexercicio'],

        ]);


        session()->flash('message', 'Informação de horarios e atividades do utente criada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::
            with('AnthropometricEvaluation', 'FoodPlan', 'FoodAnamnesis', 'UserPersonalInformation')
            ->where('id', $id)
            ->first();

        $foodplans = FoodPlan::all();
        //return $user;
       return view('admin.user', compact('user', 'foodplans'));
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
        //dd($request);
        $this->validate($request, [
            'name' => 'required|string|'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request['name'];
        $user->phone_number = $request['telemovel'];
        $user->city = $request['localidade'];
        $user->occupation = $request['ocupacao'];
        $user->birthday = $request['data'];
        $user->genre = $request['genero'];
        $user->food_plan_id = $request['food_plan_id'];
        $user->save();

        session()->flash('message', 'Informação de utente editada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }

    public function updateClinic(Request $request, $id)
    {

        $personalInformation = UserPersonalInformation::where('user_id', $id)->first();

        $personalInformation->clinical_situation = $request['situacao_clinica'];
        $personalInformation->clinical_analysis = $request['analises_clinicas'];
        $personalInformation->intestinal_transit = $request['transito_intestinal'];
        $personalInformation->digestive_complaints = $request['queixas_digestivas'];
        $personalInformation->alergies_intolerances = $request['intolerancias_alimentares'];
        $personalInformation->hydration = $request['hidratacao'];

        $personalInformation->save();

        session()->flash('message', 'Informação clinica do utente editada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }

    public function updateNutritional(Request $request, $id)
    {

        $personalInformation = UserPersonalInformation::where('user_id', $id)->first();

        $personalInformation->weekend_food = $request['ref_fim_semana'];
        $personalInformation->most_confection = $request['conf_mais_utilizadas'];
        $personalInformation->alcohol_consume = $request['freq_consumo_alcool'];
        $personalInformation->candys_frequency = $request['freq_consumo_doces'];
        $personalInformation->salty_food_frequency = $request['freq_consumo_sal'];
        $personalInformation->favorite_foods = $request['alimentos_preferidos'];
        $personalInformation->deprecated_foods = $request['alimentos_preteridos'];
        $personalInformation->observations = $request['observacoes'];

        $personalInformation->save();

        session()->flash('message', 'Informação nutricional do utente editada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$id);
    }

    public function updateActivities(Request $request, $id)
    {

        $personalInformation = UserPersonalInformation::where('user_id', $id)->first();

        $personalInformation->week_schedule = $request['horario_semanal'];
        $personalInformation->weekend_schedule = $request['horario_fim_semana'];
        $personalInformation->physical_exercise = $request['exercicio_fisico'];
        $personalInformation->exercice_frequency = $request['exercice_frequency'];


        $personalInformation->save();

        session()->flash('message', 'Informação horarios e atividades do utente editada com sucesso!');
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
