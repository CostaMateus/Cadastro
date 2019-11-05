@extends('layout.app', ["current" => "categories"])

@section('title', 'Editar categoria')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <form action="/categories/{{ base64_encode($category->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="editname">Nome da Categoria</label>
                            <input type="text" class="form-control" name="editname"
                                value="{{ $category->name }}" id="editname" placeholder="Categoria" autofocus >
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <a href="/categories" class="btn btn-danger btn-sm">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
