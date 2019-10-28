<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{

    public function index()
    {
        $instituicoes = Instituicao::latest()->paginate(4);

        return view('instituicao.index', compact('instituicoes'));
    }

    public function show()
    {
        return view('instituicao.show');
    }
}
