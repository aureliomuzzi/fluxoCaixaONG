@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3> Relatório de Receitas </h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                            <th scope="row">{{ $cliente }}</th>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3> Relatório de Custos </h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                            <th scope="row">{{ $fornecedor }}</th>
                            </tr>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
