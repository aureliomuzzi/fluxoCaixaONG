@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Voltar</a>
                    <a href="{{ url('empresas/new') }}" class="btn btn-outline-secondary">Nova Empresa</a>
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> Lista de Empresas </h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($empresas as $e)
                            <tr>
                            <th scope="row">{{ $e->id }}</th>
                            <td>{{ $e->cliente }}</td>
                            <td>{{ $e->fornecedor }}</td>
                            <td>{{ $e->razaoSocial }}</td>
                            <td>{{ $e->cnpj }}</td>
                            <td>
                                <a href="empresas/{{ $e->id }}/edit" class="btn btn-outline-info">Editar</a>
                            </td>
                            <td>
                                <form action="empresas/delete/{{ $e->id }}" method="POST">
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
    </div>
</div>
@endsection
