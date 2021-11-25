@extends('layouts.app')
@section('content')
@if ($ad)
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <div class="card d-flex justify-content-center">
                <div class="card-header txt-cuerpo fw-bold">
                    Anuncio #{{$ad->slug}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 txt-cuerpo">
                            <h4>Usuario</h4>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}}
                            {{$ad->user->name}}
                            {{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 txt-cuerpo">
                            <h4>Título</h4>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 txt-cuerpo">
                            <h4>Descripción</h4>
                        </div>
                        <div class="col-md-9">
                              {{$ad->body}}
                        </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                        <div class="md-2 txt-cuerpo">
                            <h4>Imagen</h4>
                        </div>
                        @foreach ($ad->images as $image)
                        <div class="col-md-4">
                            <img src="{{$image->getUrl(300,150)}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            Adult : {{$image->adult}} <br>
                            Spoof : {{$image->spoof}} <br>
                            Medical : {{$image->medical}} <br>
                            Violence : {{$image->violence}} <br>
                            Racy : {{$image->racy}} <br>
                            <b>Labels</b>
                            <ul>
                                @if ($image->labels)
                                @foreach ($image->labels as $label)
                                <li>{{$label}}</li>
                                @endforeach  
                                @endif
                            </ul>
                            
                            
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 
    <div class="row my-4 titulos">
        <div class="col-md-6 d-flex justify-content-center">
            <form action="{{route('revisor.ad.reject', ['id'=>$ad->id])}}" method="POST">
            @csrf
                <button type="submit" class="btn btn-danger box-radius fs-5 letter-sep">RECHAZAR</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <form action="{{route('revisor.ad.accept', ['id'=>$ad->id])}}" method="POST">
            @csrf
                <button type="submit" class="btn btn-success box-radius fs-5 letter-sep">ACEPTAR</button>
            </form>
        </div>
    </div>
</div>

@else
<div class="container contenedor">
    <div class="row">
        <h3 class="text-center titulos my-5">¡Qué RÁPIDO! No hay más anuncios</h3>
    </div>
</div>
@endif
@endsection