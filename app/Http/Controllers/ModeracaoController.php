<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciarPostagem;

class ModeracaoController extends Controller
{
    public function ModeracaoDenunciaPostagem(){
        $denunciaPostagem = DenunciaPostagem();
        return view ('moderacao.denunciaPostagem', compact ('denunciaPostagem'));
    }
}
