<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $request) {
        $id = $request->session()->get('user_id');

        $lastGames = UserGame::where('user_id',$id)->orderBy('end','desc')->limit(5)->get();
        
        $bestGames = UserGame::where('user_id',$id)->orderBy('rating','desc')->limit(5)->get();
        $worstGames = UserGame::where('user_id',$id)->orderBy('rating','asc')->limit(5)->get();



        return view('app.home',['lastGames'=> $lastGames,'bestGames'=>$bestGames,'worstGames'=>$worstGames]);
    }
}
