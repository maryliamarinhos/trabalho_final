@extends('principal')

@section('conteudo-principal')

<h2>Adicionar Livro</h2>

<form method="POST" action="{{url('/livros/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <textarea id="autor" class="form-control" rows="3" name="autor"></textarea>
    </div>

    <div class="form-group">
        <label for="categoria_id">Categoria</label>
        <select class="form-control" name="categoria_id" id="categoria_id">
            <option value="">Sem categoria</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
