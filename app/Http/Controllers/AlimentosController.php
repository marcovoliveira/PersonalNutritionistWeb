<?php

namespace App\Http\Controllers;

use App\Alimentos;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    public function store(Request $request){

        Alimentos::create([
            'name' => $request['equivalente'],
        ]);

        session()->flash('message', 'Equivalente criado com sucesso!');
        session()->flash('type', 'sucesso');


        return redirect('admin/equivalentes');
    }

    public  function find($id) {

        $alimentos = Alimentos::findOrFail($id);

        return $alimentos->equivalentes()->get();

    }



    public function show() {

        $alimentos = Alimentos::all();

        return view('admin.equivalentes', compact('alimentos'));
    }

    public function destroy($id){


        $alimentos = Alimentos::findOrFail($id);

        if($alimentos){
            $alimentos->equivalentes()->delete();
            $alimentos->delete();

            return response(['msg' => 'Apagado com sucesso', 'status' => 'success']);
        }


        return response(['msg' => 'Falha a apagar', 'status' => 'failed']);

    }
}
