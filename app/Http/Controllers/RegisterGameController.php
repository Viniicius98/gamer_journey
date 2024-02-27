<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use Illuminate\Http\Request;

class RegisterGameController extends Controller
{
    

    public function index($message = "") {
        
        return view ('app.register-game',['message'=> $message]);
    }

    public function save(Request $request){
        
        $game = UserGame::create($request->all());
        
        
            $message = "Jogo cadastrado com Sucesso!";
        
    
        return redirect()->route('app.register-game',['message'=> $message]);
    }
}
