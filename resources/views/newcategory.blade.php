@extends('layout.app', ["current" => "categories"])

@section('title', 'Nova categoria')

@section('body')

    <div class="row">
        <div class="mx-auto col-md-8">
            <div class="card border">
                <div class="card-body">
                    <form action="/categories" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="newcategory">Nome da Categoria</label>
                            <input type="text" class="form-control" name="newcategory" id="newcategory" placeholder="Categoria" autofocus >
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <a href="/categories" class="btn btn-danger btn-sm">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
