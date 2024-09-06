@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px">{{ __('TABELA') }}</div>

             @if (session('mensagem'))
             <br>
            <div class="alert alert-success">
                {{ session('mensagem') }}
            </div>
             @endif

             <script>
              function ConfirmDelete() {
                  return confirm('Tem certeza que deseja excluir este registro?');
              }
          </script>

               <table>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th style="text-align:center">Ações</th>
    </tr>

    @foreach ($postagens as $value)

    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->titulo}}</td>
      <td style="display: flex; justify-content:center; align-itens:center">
        <a href="{{ url('/postagem/' . $value->id) }}" class="btn btn-primary">Visualizar</a>

        <a href="{{ url('/postagem/' . $value->id . '/edit') }}" class="btn btn-warning">Editar</a>

        <form method="POST" action='{{ url ('/postagem/' . $value->id) }}' onsubmit ="return ConfirmDelete()">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
      </td>
    </tr>
    @endforeach
  </table>

  <a href="{{ url('/postagem/create') }}" class="btn btn-success">Criar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

