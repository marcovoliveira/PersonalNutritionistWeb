<?php

namespace Http\Controllers;

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
        dd($request); 
        $id = Session::get('key')->id; 

         $personalinformation = UserPersonalInformation::create([
            'name' => $request['nome'],
            'email' => $request['email'],
            'password' => bcrypt($random_password),
            'birthday' => $request['data'],
            'genre' => $request['genero'],
            'phone_number' => $request['telemovel'],
            'city' => $request['localidade'],
            'occupation' => $request['profissao']
        ]);

        $request->session()->flash('key', $user);

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
