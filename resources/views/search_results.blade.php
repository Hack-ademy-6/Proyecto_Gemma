@extends('layouts.app')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulos display-5 py-5">Resultados de la búsqueda: {{$q}}</h2>
            </div>
            @foreach ($ads as $ad)
            <div class="col-12 col-md-3 py-2 pb-5 d-flex align-items-center">
                <div class="card bg-dark shadow border-0 text-white h-100" style="width: 50rem;">
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
    </div>
@endsection