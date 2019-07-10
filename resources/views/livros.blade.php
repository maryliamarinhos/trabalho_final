@extends('principal')

@section('conteudo-principal')
    {{-- Vai pegar o conteudo que estiver dentro da section e jogar dentro do yield --}}
    <h2>Livros</h2>

    <a href="{{url('/')}}" class="btn btn-warning float-left mb-2">Início</a>
    <a href="{{url('/livros/form-adicionar')}}" class="btn btn-primary float-right mb-2">Adicionar</a>


    <table class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Data</th>
            <th>Opções</th>
        </tr>
        @forelse ($livros as $livro)
            <tr>
                <td> {{$livro->id}} </td>
                <td> {{$livro->titulo}} </td>
                <td> {{$livro->autor}} </td>
                <td> {{$livro->categoria->nome ?? 'Sem categoria'}} </td>
                <td> {{$livro->created_at}} </td>
                <td>
                    <a class="btn btn-outline-secondary" href="{{url('/livros/editar/' . $livro->id)}}">
                        Editar
                    </a>
                    <a class="btn btn-outline-secondary" href="{{url('/livros/excluir/' . $livro->id)}}">
                        Excluir
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Sem livros cadastrados.</td>
            </tr>
        @endforelse
    </table>
@endsection
