<?php

namespace App\Http\Controllers;

use App\Equivalentes;
use App\Alimentos;
use Illuminate\Http\Request;

class EquivalentesController extends Controller
{
    public function store(Request $request){


        Equivalentes::create([
            'alimentos_id' => $request['id_hide'],
            'name' => $request['equivalente'],
        ]);

        session()->flash('message', 'Alimento associado com sucesso!');
        session()->flash('type', 'sucesso');


        return redirect('admin/equivalentes');

    }

        public function destroy($special){


            $equivalente = Equivalentes::findOrFail($special);

            if($equivalente){
                $equivalente->delete();

                return response(['msg' => 'Apagado com sucesso', 'status' => 'success']);
            }


            return response(['msg' => 'Falha a apagar', 'status' => 'failed']);

        }
}
