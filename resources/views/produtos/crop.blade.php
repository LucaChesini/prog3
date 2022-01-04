@extends('templates.base')
@section('title', 'Cortar imagem')
@section('h1', 'Cortar imagem')
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-0SPWAwpC/17yYyZ/4HSllgaK7/gg9OlVozq8K7rf3J8LvCjYEEIfzzpnA2/SSjpGIunCSD18r3UhvDcu/xncWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/crop.js')}}"></script>
@endpush

@section('content')
<div class="row">
    <div class="col">

        <div>
            <img id="img-crop" class="w-100" src="{{asset('img/'.$prod->imagem)}}">
        </div>

        <form action="{{route('produtos.crop', $prod)}}" method="POST" id="cortar">
            @csrf
            <input type="hidden" id="img" name="img">
            <p>
                <input type="submit" class="btn btn-primary" value="Cortar">
            </p>
        </form>
    </div>
</div>
@endsection