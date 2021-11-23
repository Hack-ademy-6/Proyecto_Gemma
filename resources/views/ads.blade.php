@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5 py-2">
            <h1 class="titulos text-center display-5 my-2">{{__('ui.ads1')}} {{$category->name}}</h1>
        </div>
    </div>
</div>

<div class="container my-2">
    <div class="row">
        @foreach ($ads as $ad)
        <div class="col-12 col-md-4 py-2 d-flex justify-content-center">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($ad->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{$image->getUrl(300,150)}}" class="d-block card-img-top" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="card-title txt-cuerpo h4 my-1">{{$ad->title}}</h5>
                        <h6 class="card-subtitle text-muted my-1">{{$ad->price}}</h6>
                    </div>
                    <h6 class="card-subtitle my-2">
                        <strong>{{__('ui.categ')}}: <a href="#">{{$ad->category->name}}</a></strong>
                        <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                    </h6>
                    <div class="d-flex flex-column">
                        <a href="#" class="btn btn-dark txt-cuerpo box-radius my-2">LEER</a>
                    </div>
                </div>
            </div>
        </div>
                
        @endforeach
    </div>
</div>
<div class="container-fluid my-2">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$ads->links()}}
        </div>
    </div>
</div>

@endsection