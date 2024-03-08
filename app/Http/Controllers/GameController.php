<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Models\User;
use App\Models\UserGame;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');

        $games = UserGame::where('user_id',$id)->orderBy('end','desc')->paginate(10);

      
        
       return view('app.my-games',['games'=>$games,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = request('message');

        $id = $request->session()->get('user_id');

        $consoles = Console::all();

        if($message == 1){
            $message = "Jogo Cadastrado com sucesso";
        }elseif ($message == 2){
            $message = "Jogo não cadastrado";
        }else{
            $message = "";
        }


        
        return view ('app.register-game',['message'=> $message,'consoles'=>$consoles,'user_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'game' => 'required|min:3|max:50',
            'console_id' => 'exists:consoles,id',
            'start' => 'date',
            'end' => ['date', 'after:start'],
            'review' => 'required|min:5|max:100',
            'rating' => 'required'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'game.min' => 'O campo game deve ter no mínimo 3 caracteres',
            'game.max' => 'O campo game deve ter no máximo 50 caracteres',
            'console_id.exists' => 'O console informado não existe',
            'start.date' => 'O campo Inicio deve ter uma data válida',
            'end.date' => 'O campo Fim deve ter uma data valida',
            'end.after' => 'A data fim deve ser maior do que a data de Inicio',
            'review.min' => 'O campo game deve ter no mínimo 5 caracteres',
            'review.max' => 'O campo game deve ter no maximo 100 caracteres',
            
        ];

        $request->validate($rules,$feedback);

        $game = UserGame::create($request->all());
        
        $message = $game ? 1 : 2;
            
    
        return redirect()->route('game.create',['message'=> $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserGame $game)
    {
        return view ('app.game-show',['game'=>$game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGame $game, Request $request)
    {
        $id = $request->session()->get('user_id');
        $consoles = Console::all();
        return view('app.game-edit',['game'=>$game,'consoles' => $consoles,'user_id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGame $game)
    {
        $request->all();

        $game->update($request->all());

        return redirect()->route('game.show',['game'=>$game->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGame $game)
    {
        $game->delete();

        return redirect()->route('game.index',['game'=>$game->id]);
    }
}
