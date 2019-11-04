@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="newproduct">Nome da Categoria</label>
                    <input type="text" class="form-control" name="newproduct" id="newproduct" placeholder="Categoria" autofocus >
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos" class="btn btn-danger btn-sm">Cancel</a>
            </form>
        </div>
    </div>

@endsection
