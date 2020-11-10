@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center"> Sistema Fluxo de Caixa da ONG </h1>

                    <div class="row">
                        <div class="col-4">
                            <a href="{{ url('usuarios') }}" class="btn btn-outline-primary">Lista dos Usuarios</a>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('empresas') }}" class="btn btn-outline-primary">Lista de Empresas</a>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('movimentos') }}" class="btn btn-outline-primary">Lista de Movimentos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
