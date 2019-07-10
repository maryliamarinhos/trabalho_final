@extends('principal')

@section('conteudo-principal')

<h2>Adicionar Categoria</h2>

<form method="POST" action="{{url('/categorias/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text">
    </div>

    <div class="form-group">
        <label for="descricao">Descricao</label>
        <textarea id="descricao" class="form-control" rows="3" name="descricao"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
