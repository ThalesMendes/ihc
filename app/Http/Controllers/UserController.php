<?php

namespace App\Http\Controllers;

use App\Instituicao;
use App\Pessoa;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $pessoas = Pessoa::take(3)->get();
        $instituicoes = Instituicao::take(2)->get();


        return view('home');
    }
}
