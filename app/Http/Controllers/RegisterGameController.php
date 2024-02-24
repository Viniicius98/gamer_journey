<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterGameController extends Controller
{
    public function index() {
        return view ('app.register-game');
    }
}
