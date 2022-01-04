@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<h1>{{ $prod->nome }}</h1>
<p>Preço: R$ {{$prod->preco}}</p>
<p>Descrição do produto: {{ $prod->descricao }}</p>
<p>Imagem:</p>
<p>
    @if(Auth::user() && Auth::user()->admin)
        <a href="{{route('produtos.cortar', $prod)}}">
            <img class="w-25 ratio ratio-16x9" src="{{asset('img/'.$prod->imagem)}}">
        </a>
    @else
        <img class="w-25 ratio ratio-16x9" src="{{asset('img/'.$prod->imagem)}}">
    @endif
</p>
@endsection