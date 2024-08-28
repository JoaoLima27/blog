@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form method="POST" action="{{ url('/categoria') }}">
                    @csrf

                <div class="mb-3">
                    <label for="fname" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome da categoria:">
                    <input type="submit" value="Enviar">
                  </div>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

