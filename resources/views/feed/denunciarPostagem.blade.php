@extends('layouts.app')

@section('content')

<p>{{ $postagem->titulo }}</p>

@auth
<form method="POST" action="{{ url('/feed/denunciarpostagem') }}">
    @csrf

<div class="mb-3">
    <label for="fname" class="form-label">Conteúdo</label>
    <input type="hidden" name="postagem_id" value="{{ $postagem->id }}">
    <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50">
        </textarea>

  </div>
  <input type="submit" value="Enviar">

  </form>
  @endauth

@endsection
