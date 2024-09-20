@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}"/>
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form method="POST" action="{{ url('/postagem') }}" enctype="multipart/form-data">
                    @csrf

                <div class="mb-3">

                    <label for="cars">Escolha uma categoria:</label><br>

                    <select name="categoria_id" class="form-control" id="cars">

                    @foreach($categorias as $value)
                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                    @endforeach

                    </select>

                    <label>Imagem</label>
                    <input type="file" name="imagem" class="form-control">

                    <label for="fname" class="form-label">Titulo</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Digite o nome da postagem:">

                    <label for="fname" class="form-label">Conteudo</label>
                    <textarea  id="inp_editor1" class="form-control" name="conteudo" cols="30" rows="10"></textarea>

                    <input type="submit" value="Enviar">
                  </div>

                  </form>

                  <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

                </div>
        </div>
    </div>
</div>
@endsection

