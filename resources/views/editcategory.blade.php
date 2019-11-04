@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{ base64_encode($category->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="editname">Nome da Categoria</label>
                    <input type="text" class="form-control" name="editname"
                        value="{{ $category->name }}" id="editname" placeholder="Categoria" autofocus >
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/categorias" class="btn btn-danger btn-sm">Cancel</a>
            </form>
        </div>
    </div>

@endsection
