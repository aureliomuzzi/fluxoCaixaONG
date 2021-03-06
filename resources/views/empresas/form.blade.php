@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('empresas') }}" class="btn btn-outline-secondary">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                    <form action="{{ url('empresas/update') }}/{{ $empresa->id }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cliente</label>
                                    <p><input type="radio" name="cliente" value= 1 {{ $empresa->cliente == 1 ? 'checked' : '' }}> Ativo</p>
                                    <p><input type="radio" name="cliente" value= 0 {{ $empresa->cliente == 0 ? 'checked' : '' }}> Inativo</p>
                                </div>
                                
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fornecedor</label>
                                <p><input type="radio" name="fornecedor" value= 1 {{ $empresa->fornecedor == 1 ? 'checked' : '' }}> Ativo</p>
                                <p><input type="radio" name="fornecedor" value= 0 {{ $empresa->fornecedor == 0 ? 'checked' : '' }}> Inativo</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Razão Social:</label>
                                    <input type="text" name="razaoSocial" class="form-control" value="{{ $empresa->razaoSocial }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CNPJ:</label>
                                    <input type="text" name="cnpj" class="form-control" value="{{ $empresa->cnpj }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Responsavel:</label>
                                    <input type="text" name="responsavel" class="form-control" value="{{ $empresa->responsavel }}">
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info">Atualizar</button>
                    </form>
                    @else

                    <form action="{{ url('empresas/add') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cliente</label>
                                    <p><input type="radio" name="cliente" value= 1 > Ativo</p>
                                    <p><input type="radio" name="cliente" value= 0 > Inativo</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fornecedor</label>
                                    <p><input type="radio" name="fornecedor" value= 1 > Ativo</p>
                                    <p><input type="radio" name="fornecedor" value= 0 > Inativo</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Razão Social:</label>
                                    <input type="text" name="razaoSocial" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CNPJ:</label>
                                    <input type="text" name="cnpj" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Responsavel:</label>
                                    <input type="text" name="responsavel" class="form-control">
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