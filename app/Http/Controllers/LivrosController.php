<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Livro;
Use App\Categoria;
Use App\Carbon;

class LivrosController extends Controller
{
    //
    /**
     * Retorna todos os livros cadastrados
     */
    public function livros(){
        $dados = Livro::all();
        return view('livros')->with('livros', $dados);
    }
    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar(){
        return view('form-adicionar')
            ->with('categorias', Categoria::all());
    }
/**
     * Método que vai adicionar um livro ao BD
     */
    public function adicionar(Request $request){
        $livro = new Livro();
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->categoria_id = $request->categoria_id;
        $livro->save();

        //Atribuição em massa
        Livro::create($request->input());
        return redirect()->action('LivrosController@livros');
    }

    public function excluir($id){
        //Excluir via eloquent quando tem o id
        Livro::destroy($id);
        return redirect()->action('LivrosController@livros');
    }

    public function form_editar($id){
        //$livro = Post::where('id', $id)->get();
        //Buscar o post no BD pelo id
        $livro = Livro::find($id);
        //chamando a view e passando o dado do post
        return view('form-editar')
            ->with('livro', $livro)
            ->with('categorias', Categoria::all());
    }

    public function editar(Request $request){
        //$livro = Livro::find($request->id);
        //$livro->titulo = $request->titulo;
        //$livro->autor = $request->autor;
        //$livro->save();
        //Via atribuicao em massa
        Livro::find($request->id)->update($request->input());
        return redirect()->action('LivrosController@livros');
    }

}
