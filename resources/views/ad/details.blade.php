@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-1">
    <div class="row">
        <div class="col-12 titulos text-center">
            <h1 class="display-5">{{__("Detalles del producto")}}</h1>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
      
        <div class="col-12 col-md-6">
        <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper2 carrusel"
    >
      <div class="swiper-wrapper">
        @foreach ($ad->images as $image)
        <div class="swiper-slide @if($loop->first)active @endif">
          <img src="{{Storage::url($image->file)}}" />
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
      <div class="swiper-wrapper mt-2">
        @foreach ($ad->images as $image)
        <div class="swiper-slide @if($loop->first)active @endif">
          <img src="{{Storage::url($image->file)}}" />
        </div>
        @endforeach
      </div>
    </div>
    
    </div>
    
        <div class="col-12 col-md-6">
            <div>
                <h5 class="titulos h2">{{$ad->title}}</h5>
                <p>{{$ad->body}}</p>
            </div>
            <div>
                <h6 class="txt-cuerpo h4 pt-3">{{__("Precios")}}: <b>{{$ad->price}}</b></h6>
                <div>
                    <strong>{{__("Categorías")}}: <a href="#">{{$ad->category->name}}</a></strong>
                    <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5 pt-3">
                <button type="button" class="btn btn-success titulos fs-5 box-radius letter-sep">{{__("Comprar")}}</button>
            </div>
        </div>
    </div>
</div>













@endsection