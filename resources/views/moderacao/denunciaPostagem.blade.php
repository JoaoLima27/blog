@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px">{{ __('DENÚNCIAS') }}</div>

             @if (session('mensagem'))
             <br>
            <div class="alert alert-success">
                {{ session('mensagem') }}
            </div>
             @endif

               <table>
    <tr>
      <th>ID</th>
      <th>Postagem - Titulo</th>
      <th>Postagem - Autor</th>
      <th>Denunciante</th>
      <th>Contéudo Denúnciado</th>
      <th>Status</th>
      <th style="text-align:center">Ações</th>
    </tr>

    @foreach ($denunciaPostagem as $value)

    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->postagem->titulo}}</td>
      <td>{{$value->postagem->autor->name}}</td>
      <td>{{$value->denunciante->name}}</td>
      <td>{{$value->conteudo}}</td>
      <td>{{$value->status}}</td>

      <td style="display: flex; justify-content:center; align-itens:center">
        <a href="{{ url('/ModeracaoDenunciaPostagemAceito/' . $value->id) }}" class="btn btn-primary">ACEITO</a>
        <a href="{{ url('/ModeracaoDenunciaPostagemNegado/' . $value->id) }}" class="btn btn-danger">NEGADO</a>

      </td>
    </tr>
    @endforeach
  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

