<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Categoria;
Use App\Carbon;

class CategoriasController extends Controller
{
    //
    /**
     * Retorna todos os categorias cadastrados
     */
    public function categorias(){
        $dados = Categoria::all();
        return view('categorias')->with('categorias', $dados);
    }
    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar(){
        return view('form-adicionar-cat');
    }
/**
     * Método que vai adicionar um categoria ao BD
     */
    public function adicionar(Request $request){
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->save();

        //Atribuição em massa
        Categoria::create($request->input());
        return redirect()->action('CategoriasController@categorias');
    }

    public function excluir($id){
        //Excluir via eloquent quando tem o id
        Categoria::destroy($id);
        return redirect()->action('CategoriasController@categorias');
    }

    public function form_editar($id){
        //$categoria = Post::where('id', $id)->get();
        //Buscar o post no BD pelo id
        $categoria = Categoria::find($id);
        //chamando a view e passando o dado do post
        return view('form-editar-cat')->with('categoria', $categoria);
    }

    public function editar(Request $request){
        //$categoria = Categoria::find($request->id);
        //$categoria->titulo = $request->titulo;
        //$categoria->autor = $request->autor;
        //$categoria->save();
        //Via atribuicao em massa
        Categoria::find($request->id)->update($request->input());
        return redirect()->action('CategoriasController@categorias');
    }

}
