@extends('principal')

@section('conteudo-principal')
    {{-- Vai pegar o conteudo que estiver dentro da section e jogar dentro do yield --}}
    <div class="row">
        <h2>Categorias</h2>
    </div>
    
    <a href="{{url('/')}}" class="btn btn-warning float-left mb-2">Início</a>
    <a href="{{url('/categorias/form-adicionar')}}" class="btn btn-primary float-right mb-2">Adicionar</a>

    <table class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Opções</th>
        </tr>
        @forelse ($categorias as $categoria)
            <tr>
                <td> {{$categoria->id}} </td>
                <td> {{$categoria->nome}} </td>
                <td> {{$categoria->descricao}} </td>
                <td>
                    <a class="btn btn-outline-secondary" href="{{url('/categorias/editar/' . $categoria->id)}}">
                        Editar
                    </a>
                    <a class="btn btn-outline-secondary" href="{{url('/categorias/excluir/' . $categoria->id)}}">
                        Excluir
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Sem categorias cadastradas.</td>
            </tr>
        @endforelse
    </table>
@endsection
