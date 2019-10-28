<?php

namespace App\Http\Controllers;

use App\Instituicao;
use App\Pessoa;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $pessoas = Pessoa::take(3)->get();
        $instituicoes = Instituicao::take(2)->get();


        return view('home', compact('instituicoes', 'pessoas'));
    }
}
