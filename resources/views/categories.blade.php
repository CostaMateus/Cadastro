@extends('layout.app', ["current" => "categories"])

@section('title', 'Lista de Categorias')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <h5 class="card-title text-center">Cadastro de Categorias</h5>

                    @if(count($categories) > 0)
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Código</th>
                                    <th>Nome da Categoria</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td class="text-center">{{ ++$key }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-center">
                                            <a href="/categories/editar/{{ base64_encode($category->id) }}">
                                                <i class='fas fa-edit' style='color:#3490dc'></i></a>
                                            <a href="/categories/apagar/{{ base64_encode($category->id) }}">
                                                <i class='fas fa-trash-alt' style='color:#e3342f'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="/categories/novo" class="btn btn-sm btn-primary" role="button">
                        Nova categoria
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
