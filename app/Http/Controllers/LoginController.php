<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request){
        
        $error = '';

        if($request->get('error') == 1 ){
            $error =' O usuário e ou senha não existem';
        }
        if($request->get('error') == 2 ){
            $error =' O usuário não está autenticado, por favor realize novamente o login';
        }

        return view('site.login',['error'=>$error]);
    }

    public function auth(Request $request){
        $rules = [
            'user' => 'email',
            'password' => 'required',
        ];

        $feedback = [
            'user.email' => 'O campo usuário (e-mail) é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ];


        $request->validate($rules,$feedback);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();
        
        if ($user && Hash::check($password, $user->password)) {
            
            session(['name' => $user->name, 'email' => $user->email]);
            return redirect()->route('app.home');
        } else {
            
            return redirect()->route('site.login', ['error' => 1]);
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('site.index');
    }
}
