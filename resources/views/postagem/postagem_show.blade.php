@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

               <p><strong>Titulo:</strong>{{ $postagem->titulo }}</p>
               <p><strong>Conteudo:</strong>{{ $postagem->conteudo }}</p>
               <p><strong>Autor:</strong>{{-- $postagem->nome --}}</p>
               <p><strong>Criação:</strong>{{ $postagem->created_at }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

