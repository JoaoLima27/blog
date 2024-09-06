@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form method="POST" action="{{ url('/postagem/' . $postagem->id) }}">
                    @method('PUT')
                    @csrf

                    <label for="cars">Escolha uma categoria:</label><br>

                    <select name="categoria_id" class="form-control" id="cars">

                    @foreach($categorias as $value)
                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                    @endforeach

                    </select>

                <div class="mb-3">
                    <label for="fname" class="form-label">Titulo</label>
                    <input type="text" name="titulo" value="{{ $postagem->titulo }}" class="form-control" placeholder="Digite o nome da postagem:">

                    <label for="fname" class="form-label">Conteudo</label>
                    <textarea  id="conteudo" class="form-control" name="conteudo" cols="30" rows="10">{{ $postagem->conteudo }}</textarea>

                    <input type="submit" value="Enviar">
                  </div>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

