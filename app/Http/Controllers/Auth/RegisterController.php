<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Http\session;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use SendsPasswordResetEmails;
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    protected function create(Request $request)
    {
      

          $this->validate(request(), [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'data' => 'required|date',
            'genero' => 'required',
            'telemovel' => 'integer',
        ]);
        

        $random_password = str_random(6);
        $user = User::create([
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

        /*$response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);*/

        return redirect('/admin/registar/personalinformation');
        
    }
}
