@extends('layout.app', ["current" => "products"])

@section('title', 'Novo produto')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <form action="/products" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="newproduct">Nome do produto</label>
                            <input type="text" class="form-control" name="newproduct" id="newproduct" placeholder="Produto" autofocus >
                        </div>
                        <div class="form-group">
                            <label for="stock">Quantidade em estoque</label>
                            <input type="number" class="form-control" name="stock" id="stock" placeholder="Estoque" >
                        </div>
                        <div class="form-group">
                            <label for="price">Preço da unidade</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Preço" step="0.01" >
                        </div>

                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="0" >Selecione uma categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ base64_encode($category->id) }}" >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <a href="/products" class="btn btn-danger btn-sm">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
