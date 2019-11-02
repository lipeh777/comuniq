<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $chamado = Chamado::where('fk_users_id', auth()->user()->id)->get();
        return view('home')->with(['chamado' => $chamado]);
    }
}
