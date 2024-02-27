<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {

        $lastGames = UserGame::orderBy('end','desc')->limit(5)->get();
        $bestGames = UserGame::orderBy('rating','desc')->limit(5)->get();
        $worstGames = UserGame::orderBy('rating','asc')->limit(5)->get();



        return view('app.home',['lastGames'=> $lastGames,'bestGames'=>$bestGames,'worstGames'=>$worstGames]);
    }
}
