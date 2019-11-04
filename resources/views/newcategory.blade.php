@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="newcategory">Nome da Categoria</label>
                    <input type="text" class="form-control" name="newcategory" id="newcategory" placeholder="Categoria" autofocus >
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/categorias" class="btn btn-danger btn-sm">Cancel</a>
            </form>
        </div>
    </div>

@endsection
