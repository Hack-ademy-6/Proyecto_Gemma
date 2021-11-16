@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5 py-2">
            <h1 class="titulos text-center display-1 my-2">Bienvenidos a RÁPIDO.ES</h1>
            <p class="text-center txt-cuerpo h4">¡La plataforma de compraventa más rápida! <b>¡Flash no es nadie a nuestro lado!</b></p>
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <div class="row">
        @foreach ($ads as $ad)
        <div class="col-12 col-md-4 py-2">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title txt-cuerpo h4">{{$ad->title}}</h5>
                    <h6 class="card-subtitle text-muted">{{$ad->price}}</h6>
                    <p class="card-text">{{$ad->body}}</p>
                    <h6 class="card-subtitle">
                        <strong>Categoría: <a href="#">{{$ad->category->name}}</a></strong>
                        <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                    </h6>
                    <a href="#" class="btn btn-dark txt-cuerpo">VISUALIZAR</a>
                </div>
            </div>
        </div>
                
        @endforeach
    </div>
</div>
       
















@endsection