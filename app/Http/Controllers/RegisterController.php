<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register (){

        $console = Console::all();

        return view('site.register',['console'=>$console]);
    }

    public function save(Request $request) {

        $rules = [
            'name' => 'required|min:3|max:50',
            'birth' => 'required',
            'age' => 'required',
            'pref_console' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'password'=>'required',

        ];
        $feedback = [
            'required' => 'O Campo precisar ser preenchido',
            'email.unique' => 'O meu inserido já está sendo utilizado',
            'name.min' => 'O campo nome dever ter no minímo 3 caracteres',
            'name.max' => 'O campo nome dever ter no máximo 50 caracteres',
        ];

        $request->validate($rules,$feedback);

        $user = User::create([
            'name' => $request->input('name'),
            'birth' => $request->input('birth'),
            'age' => $request->input('age'),
            'pref_console' => $request->input('pref_console'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            
        ]);

        return view('site.login');

    }

    
}
