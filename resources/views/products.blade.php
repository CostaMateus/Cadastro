@extends('layout.app', ["current" => "produtos" ])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>

        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">
                Novo produto
            </a>
        </div>
    </div>

@endsection
