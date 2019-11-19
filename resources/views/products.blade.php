@extends('layout.app', ["current" => "products" ])

@section('title', 'Lista de Produtos')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-12">
            <div class="card border">
                <div class="card-body">
                    <h5 class="card-title text-center">Cadastro de Produtos</h5>

                    @if(count($products) > 0)
                        <table class="table table-ordered table-hover mb-0" id="productTable">
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

@section('javascript')
    <script type="text/javascript">
        function formatPrice(num) {
            return (
                num
                .toFixed(2)
                .replace('.', ',')
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            )
        }

        function editProduct(idP) {
            $.getJSON("/api/products/" + idP, function(data) {
                console.log(data);
            });
        }

        function destroyProduct(idP) {
            console.log(idP);
            // $.ajax({
            //     type: "DELETE",
            //     url: "/api/products/" + id + ,
            //     context: this,
            //     success: function () {
            //         console.log("Destroy OK")
            //     },
            //     error: function (error) {
            //         console.log(error)
            //     }
            // });
        }

        function getRow(Product, key) {
            var row =
                '<tr>' +
                    '<td class="text-center">' + key + '</td>' +
                    '<td>' + Product.name + '</td>' +
                    '<td>' + Product.stock + '</td>' +
                    '<td>R$ ' + formatPrice(Product.price) + '</td>' +
                    '<td>' + Product.category + '</td>' +
                    '<td class="text-center">' +
                        '<!--<button class="btn pr-1" onclick="editProduct(' + btoa(Product.id) + ')">' +
                            '<i class=\'fas fa-edit\' style=\'color:#3490dc\'></i></button>' +
                        '<button class="btn pl-1" onclick="destroyProduct(' + btoa(Product.id) + ')">' +
                            '<i class=\'fas fa-trash-alt\' style=\'color:#e3342f\'></i></button>-->' +
                        '<a class="pr-1" href="/products/' + btoa(Product.id) + '/edit">' +
                            '<i class=\'fas fa-edit\' style=\'color:#3490dc\'></i></a>' +
                        '<a class="pl-1" href="/products/' + btoa(Product.id) + '/delete">' +
                            '<i class=\'fas fa-trash-alt\' style=\'color:#e3342f\'></i></a>' +
                    '</td>' +
                '</tr>';
            return row;
        }

        function loadProducts() {
            $.getJSON('/api/products', function (products){
                for (i = 0; i < products.length; i++)
                {
                    y = i;
                    row = getRow(products[i], ++y);
                    $('#productTable>tbody').append(row);
                }
            });
        }

        $(function(){
            loadProducts();
        })
    </script>
@endsection
