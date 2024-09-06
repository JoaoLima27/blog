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

                <form method="POST" action="{{ url('/postagem') }}">
                    @csrf

                <div class="mb-3">

                    <label for="cars">Escolha uma categoria:</label><br>

                    <select name="categoria_id" class="form-control" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                    </select>

                    <label for="fname" class="form-label">Titulo</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Digite o nome da postagem:">

                    <label for="fname" class="form-label">Conteudo</label>
                    <textarea  id="conteudo" class="form-control" name="conteudo" cols="30" rows="10"></textarea>

                    <input type="submit" value="Enviar">
                  </div>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

