@extends('layouts.app')
@section('content')


<div class="container-fluid bg-gris">
    <div class="row">
        <div class="col-12 my-5 py-5">
            <h1 class="titulos text-center display-1 my-2">Bienvenidos a <span class="text-danger">RÁPIDO.ES</span></h1>
            <h2 class="text-center txt-cuerpo">¡La plataforma de compraventa más rápida! <b>¡Flash no es nadie a nuestro lado!</b></h2>
            <h4 class="txt-cuerpo text-center">¿Qué te gustaría comprar?</h4>
        </div>
        @include('layouts._category')
        <div class="col-12 my-5 py-4 d-flex justify-content-center">
            <i class="fas fa-angle-double-down mx-1 h2"></i>
            <i class="fas fa-angle-double-down mx-1 h2"></i>
            <i class="fas fa-angle-double-down mx-1 h2"></i>
        </div>
    </div>
</div>



<div class="container my-5">
    <div class="row">
        @foreach ($ads as $ad)
        <div class="col-12 col-md-3 py-2 d-flex justify-content-center">
            <div class="card h-100" style="width: 15rem;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title txt-cuerpo h4 my-1">{{$ad->title}}</h5>
                    <h6 class="card-subtitle text-muted my-1">{{$ad->price}}</h6>
                    <h6 class="card-subtitle my-1">
                        <strong>Categoría: <a href="{{route('category.ads', ['name' => $ad->category->name, 'id'=>$ad->category->id])}}">{{$ad->category->name}}</a></strong>
                    </h6>
                    <a href="{{route('ad.details', ['id'=>$ad->id])}}" class="btn btn-dark txt-cuerpo box-radius my-4">Más</a>
                </div>
            </div>
        </div>
                
        @endforeach
    </div>
</div>
       
















@endsection