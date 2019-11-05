@extends('layout.app', ["current" => "products" ])

@section('title', 'Lista de Produtos')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <h5 class="card-title text-center">Cadastro de Produtos</h5>

                    @if(count($products) > 0)
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Código</th>
                                    <th>Nome da Produto</th>
                                    <th>Qntt em estoque</th>
                                    <th>Preço unitário</th>
                                    <th>Categoria</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td class="text-center">{{ ++$key }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td class="text-center">
                                            <a href="/products/{{ base64_encode($product->id) }}/edit">
                                                <i class='fas fa-edit' style='color:#3490dc'></i></a>
                                            <a href="/products/{{ base64_encode($product->id) }}/delete">
                                                <i class='fas fa-trash-alt' style='color:#e3342f'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="/products/create" class="btn btn-sm btn-primary" role="button">
                        Novo produto
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
