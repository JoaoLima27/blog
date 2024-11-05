<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Curtida;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function welcome(){
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view ('welcome', compact('postagens'));
    }

    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));
    }

    public function categoriaById($id){
        $postagens = Postagem::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view ('feed.categoriaById', compact ('postagens'));
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('feed.autor', compact('autores'));
    }

    public function autorById($id){
        $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view ('feed.autorById', compact ('postagens'));
    }

    public function comentario($id){
        $postagem = Postagem::find($id);
        return view ('feed.comentario', compact ('postagem'));
    }

    public function curtida($id){

    $user_id = Auth::id();

      $curtida_exist = Curtida::where('postagem_id', $id)->where ('user_id', $user_id)->exists();

      if(!$curtida_exist){
        $curtida = new Curtida();
        $curtida->postagem_id = $id;
        $curtida->user_id = $user_id;
        $curtida->save();
      }else{
        $curtida = Curtida::where('postagem_id', $id)->where ('user_id', $user_id)->first();
        $curtida->delete();
      }

      return back()->withInput();

    }

    public function denunciarPostagem($id){
        $postagem = Postagem::find($id);
        return view('feed.denunciarPostagem', compact('postagem'));
    }
}
