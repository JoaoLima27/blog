@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{ url('/categoria/create') }}" class="btn btn-success">Criar</a>

               <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Ações</th>
    </tr>

    @foreach ($categorias as $value)

    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->nome}}</td>
      <td>

        <a href="{{ url('/categoria/' . $value->id) }}" class="btn btn-primary">Visualizar</a>

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
