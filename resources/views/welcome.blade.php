@extends('layouts.app')
@section('content')
    
@if (session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
    
@endif
<div class="container-fluid my-5 py-2">
    <h1 class="titulos text-center display-1 my-2">Bienvenidos a RÁPIDO.ES</h1>
    <p class="text-center txt-cuerpo h4">¡La plataforma de compraventa más rápida! <b>¡Flash no es nadie a nuestro lado!</b></p>
</div>
















@endsection