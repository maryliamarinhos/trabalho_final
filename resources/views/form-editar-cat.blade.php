@extends('principal')

@section('conteudo-principal')

<h2>Editar Categoria</h2>
<hr />

<form method="POST" action="{{url('/categorias/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$categoria->id}}">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text" value="{{$categoria->nome}}">
    </div>

    <div class="form-group">
        <label for="descricao">Categoria</label>
        <textarea id="descricao" class="form-control" rows="3" name="descricao">{{$categoria->descricao}}</textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
