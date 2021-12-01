@extends('layouts.app')
@section('content')

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 text-center mb-5 pb-5">
            <h1 class="titulos display-3">¿Que <span class="text-danger">QUÉ</span> tenemos?</h1>
            <h2 class="titulos"><span class="text-danger">¡CORRE!</span> ¡Hecha un vistazo antes de que desaparezca!</h2>
        </div>
        @include('layouts._category')
    </div>
</div>
<div class="container my-5 borde2">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mt-4">
            <h2 class="titulos display-5">Oh... parece que no quieres entrar en ninguna categoría...</h2>
            <h3 class="txt-cuerpo">Bueno, ¿por qué no subes algún anuncio?</h3>
            <h3 class="txt-cuerpo">¡Vende lo que no quieres tener en casa y gana dinero!</h3>
            <div class="d-flex justify-content-center">
                <a class="fs-2 my-4 text-decoration-none links2 badge box-radius bg-success" href="{{route('ad.new')}}"><i class="fas fa-plus"></i> {{__("Anuncio")}}</a>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center mt-4">
            <h2 class="titulos display-5">¿Quieres ver los últimos anuncios?</h2>
            <h3 class="txt-cuerpo">¡A qué esperas!</h3>
            <div class="">
                <lord-icon
                    class="me-3"
                    src="https://cdn.lordicon.com/gmzxduhd.json"
                    trigger="loop-on-hover"
                    colors="primary:#000000,secondary:#911710"
                    style="width:150px;height:150px">
                </lord-icon>
                <a class="btn  btn-danger titulos fs-3 box-radius letter-sep" href="{{route('welcome')}}">{{__("Inicio")}}</a>
            </div>
            
        </div>
    </div>
</div>



@endsection