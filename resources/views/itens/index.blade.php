@extends('templates.base')
@section('title', 'Galeria')
@section('h1', 'Página de Galeria')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à galeria</p>
    </div>
</div>

<div class="row">
    <div class="col mb-2">
        <a class="btn btn-primary" href="{{route('itens.inserir')}}" role="button">Inserir Produto</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table align-middle">
        <tr>
            <th>Imagem</th>
            <th width="75%">Nome</th>
            <th>Preço</th>
        </tr>

        @foreach($itens as $item) {{-- Cria uma linha para cada item da tabela --}}
        <tr>
            <td>
                <a href="{{route('itens.show', $item)}}"> {{-- Link para a página de visualização indivivual de produtos, com a variavel para identificar qual deve ser mostrado --}}
                    <div class="ratio ratio-1x1">
                        <img src="{{asset('imgitens/'.$item->imagem)}}" style="object-fit: cover">
                    </div>
                </a>
            </td>
            <td>
                <a href="{{route('itens.show', $item)}}">{{$item->nome}}</a> {{-- Link para a página de visualização indivivual de produtos, com a variavel para identificar qual deve ser mostrado --}}
            </td>
            <td>R$ {{$item->preco}}</td>
        </tr>
        @endforeach
    </table>
    </div>
</div>

@endsection