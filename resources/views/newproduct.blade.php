@extends('layout.app', ["current" => "products"])

@section('title', 'Novo produto')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <form action="/products" method="POST" id="newProductForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome do produto</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Produto" autofocus >
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="stock">Quantidade em estoque</label>
                            <input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" name="stock" id="stock" placeholder="Estoque" >
                            @if($errors->has('stock'))
                                <div class="invalid-feedback">{{ $errors->first('stock') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price">Preço da unidade</label>
                            <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" id="price" placeholder="Preço" step="0.01" >
                            @if($errors->has('price'))
                                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="0" >Selecione uma categoria</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{ base64_encode($category->id) }}" >
                                        {{ $category->name }}
                                    </option>
                                @endforeach --}}
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

@section('javascript')
    <script type="text/javascript">
        function loadCategories() {
            $.getJSON('/api/categories', function (categories){
                for (i = 0; i < categories.length; i++)
                {
                    option = '<option value="' + btoa(categories[i].id) + '" >' +
                                categories[i].name +
                             '</option>';
                    $('#category_id').append(option);
                }
            });
        }

        function createProduct() {
            product = {
                name: $('#name').val(),
                stock: $('#stock').val(),
                price: $('#price').val(),
                category_id: $('#category_id').val()
            }
            $.post('/api/products', product, function(data) {
                console.log(data);
            });
        }

        $('#newProductForm').submit(
            function (event) {
                event.preventDefault();
                createProduct();
                window.location.replace('/products');
            }
        );


        $(function(){
            loadCategories();
        })
    </script>
@endsection
