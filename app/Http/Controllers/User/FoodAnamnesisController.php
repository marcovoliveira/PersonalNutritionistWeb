<?php

namespace App\Http\Controllers\User;




use App\User;
use App\FoodAnamnesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class FoodAnamnesisController extends Controller
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
            return view('admin.registar.foodanamnesis', compact('user'));
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

         $foodanamnesis = FoodAnamnesis::create([
            'user_id' => $user->id,
            'breakfast_hour' => $request['pequenoalmocohora'],
            'breakfast' => $request['pequenoalmoco'],
            'morning_snack_hour' => $request['meiodamanhahora'],
            'morning_snack' => $request['meiodamanha'],
            'lunch_hour' => $request['almocohora'],
            'lunch' => $request['almoco'],
            'snack_one_hour' => $request['lancheumhora'],
            'snack_one' => $request['lancheum'],
            'snack_two_hour' => $request['lanchedoishora'],
            'snack_two' => $request['lanchedois'],
            'diner_hour' => $request['jantarhora'],
            'diner' => $request['jantar'],
            'bedtime_snack_hour' => $request['ceiahora'],
            'bedtime_snack' => $request['ceia'],
            'snacks' => $request['petiscos'],
        ]);


        $request->session()->flash('key', $user);

        return redirect('/admin/registar/anthropometricevaluation');


    }

    public function createAnamnese(Request $request, $id)
    {

        $anamnese = FoodAnamnesis::create([
            'user_id' => $id,
            'breakfast_hour' => $request['pequenoalmocohora'],
            'breakfast' => $request['pequenoalmoco'],
            'morning_snack_hour' => $request['meiodamanhahora'],
            'morning_snack' => $request['meiodamanha'],
            'lunch_hour' => $request['almocohora'],
            'lunch' => $request['almoco'],
            'snack_one_hour' => $request['lancheumhora'],
            'snack_one' => $request['lancheum'],
            'snack_two_hour' => $request['lanchedoishora'],
            'snack_two' => $request['lanchedois'],
            'diner_hour' => $request['jantarhora'],
            'diner' => $request['jantar'],
            'bedtime_snack_hour' => $request['ceiahora'],
            'bedtime_snack' => $request['ceia'],
            'snacks' => $request['petiscos'],
        ]);

        if ($request->ajax()){

            return response()->json($anamnese, 200);
        }

        session()->flash('message', ' Anamnese alimentar do utente criada com sucesso!');
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

        $anamnese = FoodAnamnesis::findOrFail($id);

        $anamnese->update($request->all());

        session()->flash('message', 'Anamnese do utente editada com sucesso!');
        session()->flash('type', 'sucesso');
        return redirect('admin/utente/'.$anamnese->user_id);
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
