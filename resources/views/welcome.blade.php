@extends('layouts.app')
@section('content')


<div class="container-fluid bg-gris">
    <div class="row">
        <div class="col-12 my-5 py-5">
            <h1 class="titulos text-center display-1 my-2">{{__("Bienvenidos a")}} <span class="text-danger">RÁPIDO.ES</span></h1>
            <h2 class="text-center txt-cuerpo">{{__("¡La plataforma de compraventa más rápida!")}} <b>{{__("¡Flash no es nadie a nuestro lado!")}}</b></h2>
            <h4 class="txt-cuerpo text-center">{{__("¿Qué te gustaría comprar?")}}</h4>
        </div>
        @include('layouts._category')
        <div class="col-12 my-4 py-4 d-flex justify-content-center">
            <i class="fas fa-angle-double-down mx-1 h2"></i>
            <i class="fas fa-angle-double-down mx-1 h2"></i>
            <i class="fas fa-angle-double-down mx-1 h2"></i>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row h-100">
        <div class="col-12 text-center">
            <h3 class="py-3 txt-cuerpo display-6">{{__("¿Quieres ganar dinero fácilmente? ¡Añade tu propio anuncio!")}}</h3>
            <a type="button" href="{{route('ad.new')}}" style="width: 20rem" class="btn btn-success box-radius titulos">
                <h4 class="fs-1">{{__("Pincha aquí o en")}} <span class="mx-2"> <i class="fas fa-plus fs-3"></i></span></h4>
            </a>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        
        <h2 class="titulos display-6 text-center py-3">¡Últimos anuncios!</h2>
        
        @foreach ($ads as $ad)
        <div class="col-12 col-md-3 py-2 d-flex justify-content-center">
            <div class="card bg-dark shadow border-0 text-white h-100" style="width: 20rem;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($ad->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{$image->getUrl(300,150)}}" class="d-block w-100 card-img-top" alt="...">
                        </div>
                        @endforeach
                    </div>
                </div>
        
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title txt-cuerpo h4 my-1">{{$ad->title}}</h5>
                    <h6 class="card-subtitle text-muted my-1">{{$ad->price}}</h6>
                    <h6 class="card-subtitle my-1">
                        <strong>Categoría: <a href="{{route('category.ads', ['name' => $ad->category->name, 'id'=>$ad->category->id])}}" class="links">{{$ad->category->name}}</a></strong>
                    </h6>
                    <a href="{{route('ad.details', $ad->slug)}}" class="btn btn-danger mb-0 txt-cuerpo  box-radius my-4">{{__("Más")}}</a>
                </div>
            </div>
        </div>
                
        @endforeach
    </div>
</div>
       
















@endsection