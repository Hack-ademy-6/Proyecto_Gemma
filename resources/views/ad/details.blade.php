@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-1">
    <div class="row">
        <div class="col-12 titulos text-center">
            <h1 class="display-5">{{__("Detalles del producto")}}</h1>
        </div>
    </div>
</div>
<div class="container borde1 pt-5">
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
                <div>
                    <strong>{{__("Categorías")}}: <a href="#">{{$ad->category->name}}</a></strong>
                </div>
                <h5 class="txt-cuerpo h4 pt-3">{{__("Precios")}}: <b>{{$ad->price}}</b></h5>
                
            </div>
        </div>
    </div>
</div>
<div class="container my-4 pb-5">
  <div class="row">
    <div class="col-12 col-md-6 d-flex">
      <lord-icon
        src="https://cdn.lordicon.com/dxjqoygy.json"
        trigger="loop-on-hover"
        colors="primary:#000000,secondary:#911710"
        style="width:150px;height:150px">
      </lord-icon>
      <div class="card shadow " style="width: 30rem;">
        <div class="card-body ">
          <h4 class="card-title titulos">{{__("INFORMACIÓN DEL VENDEDOR")}}</h4>
          <h6 class="txt-cuerpo">{{__("NOMBRE")}}: {{$ad->user->name}}</h6>
          <h6 class="txt-cuerpo">{{$ad->user->lastname}}</h6>
          <h6 class="txt-cuerpo">{{__("EMAIL")}}: {{$ad->user->email}}</h6>
          <h6 class="txt-cuerpo">{{$ad->created_at->format('d/m/Y')}}</h6>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center">
      <div class="d-flex flex-column mx-5">
        <lord-icon
          src="https://cdn.lordicon.com/dnoiydox.json"
          trigger="loop-on-hover"
          colors="primary:#000000,secondary:#911710"
          style="width:100px;height:100px">
        </lord-icon>
        <button type="button" class="btn btn-success titulos fs-5 box-radius letter-sep">{{__("COMPRAR")}}</button>
      </div>
      <div class="d-flex flex-column mx-5">
        <lord-icon
          src="https://cdn.lordicon.com/hrqwmuhr.json"
          trigger="loop-on-hover"
          colors="primary:#000000,secondary:#911710"
          style="width:100px;height:100px">
        </lord-icon>
        <a type="button" href="{{route('welcome')}}" class="btn btn-danger titulos fs-5 box-radius letter-sep">{{__("VOLVER")}}</a>
      </div>
    </div>
    
  </div>
</div>














@endsection