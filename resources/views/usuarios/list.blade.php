@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Voltar</a>
                    <a href="{{ url('usuarios/new') }}" class="btn btn-outline-secondary">Novo Usuario</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> Lista de Usuarios </h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ações</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $u)
                                <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <a href="usuarios/{{ $u->id }}/edit" class="btn btn-outline-info">Editar</a>
                                </td>
                                <td>
                                    <form action="usuarios/delete/{{ $u->id }}" method="POST">
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
