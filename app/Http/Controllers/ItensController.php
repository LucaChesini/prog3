<?php

namespace App\Http\Controllers;

use App\Models\Iten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItensController extends Controller
{
    public function index(){
        $itens = Iten::orderBy('nome', 'asc')->get(); //salva os itens em ordem alfabetica em uma variavel

        return view('itens.index', ['itens' => $itens, 'pagina' => 'galeria']); //retorna a visualização da view com todos os itens
    }

    public function show(Iten $item){
        return view('itens.show', ['item' => $item, 'pagina' => 'galeria']); // retorna a view de visualização de item específico com os dados daquele selecionado
    }

    public function create(){
        return view('itens.create', ['pagina' => 'galeria']); //redireciona para o formulário de inserção de itens
    }

    public function insert(Request $form){
        $item = new Iten(); //recebe a model, criando um novo item

        $caminho = $form->file('imagem')->store('', 'itens'); //armazena a imagem em uma pasta na storage e recebe o nome do arquivo, gerado aleatoriamente

        //model recebe os valores do item
        $item->nome = $form->nome;
        $item->preco = $form->preco;
        $item->descricao = $form->descricao;
        $item->imagem = $caminho;

        $item->save(); //salva as alterações

        return redirect()->route('itens');
    }
}
