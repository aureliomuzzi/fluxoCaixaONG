@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Voltar</a>
                    <a href="{{ url('movimentos/new') }}" class="btn btn-outline-secondary">Novo Movimento</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> Lista de Movimentos </h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo de Movimento</th>
                            <th scope="col">Nome Empresa</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($movimentos as $m)
                            <tr>
                            <th scope="row">{{ $m->id }}</th>
                            <td>
                                @if($m->tipo == 'R')
                                    <b>Receita</b>
                                @else
                                    <b>Custo</b>
                                @endif
                            </td>
                            <td>
                                @foreach($empresas as $e)
                                    @if($m->empresa_id == $e->id)
                                        {{ $e->razaoSocial }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $m->valor }}</td>
                            <td>
                                <a href="movimentos/{{ $m->id }}/edit" class="btn btn-outline-info">Editar</a>
                            </td>
                            <td>
                                <form action="movimentos/delete/{{ $m->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Deletar</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3> Resumo de Caixa </h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Receitas</th>
                            <th scope="col">Custos</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td>{{ $receitas }}</td>
                            <td>{{ $custos }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection
