@extends('templates.base')
@section('title', 'Visualizar item')

@section('content')
    <div class="row">
        <div class="col">
            <div class="d-flex flex-row justify-content-center">
                <div class="ratio ratio-1x1 w-25">
                    <img src="{{asset('imgitens/'.$item->imagem)}}" style="object-fit: cover">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="my-2"><b>Nome:</b> {{$item->nome}}</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="my-2"><b>Preço:</b> R${{$item->preco}}</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="my-2"><b>Descrição:</b> {{$item->descricao}}</div>
        </div>
    </div>
@endsection