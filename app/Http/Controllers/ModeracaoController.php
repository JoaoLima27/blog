<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciarPostagem;

class ModeracaoController extends Controller
{
    public function ModeracaoDenunciaPostagem(){
        $denunciaPostagem = DenunciarPostagem::orderBy('id', 'DESC')->paginate(10);
        return view ('moderacao.denunciaPostagem', compact ('denunciaPostagem'));
    }

    public function ModeracaoDenunciaPostagemAceito($id){
        $denunciaPostagem = DenunciaPostagem::find($id);
        $denunciaPostagem->status = 'ACEITO';
        $denunciaPostagem->save();

        $postagem = Postagem::find($denunciaPostagem->postagem_id);
        $postagem->status = 0;
        $postagem->save();

        return redirect()->route('ModeracaoDenunciaPostagem')->with('mensagem', 'Denúncia Aceita Com Sucesso!');
    }
}
