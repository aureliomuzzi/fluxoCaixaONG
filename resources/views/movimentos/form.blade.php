@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('movimentos') }}" class="btn btn-outline-secondary">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                    <form action="{{ url('movimentos/update') }}/{{ $movimento->id }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipo de Movimento</label>
                                <p><input type="radio" name="tipo" value= "R" {{ $movimento->tipo == 'R' ? 'checked' : '' }}> Receita</p>
                                <p><input type="radio" name="tipo" value= "C" {{ $movimento->tipo == 'C' ? 'checked' : '' }}> Custo</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Empresa:</label>
                                    <input type="text" name="empresa_id" class="form-control" value="{{ $movimento->empresa_id }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor:</label>
                                    <input type="text" name="valor" class="form-control" value="{{ $movimento->valor }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Atualizar</button>
                    </form>
                    @else

                    <form action="{{ url('movimentos/add') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Tipo de Movimento</label>
                                <p><input type="radio" name="tipo" value= "R"> Receita</p>
                                <p><input type="radio" name="tipo" value= "C"> Custo</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Empresa:</label>
                                    <input type="text" name="empresa_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor:</label>
                                    <input type="text" name="valor" class="form-control">
                                </div>
                            </div>
                        </div>
        
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection