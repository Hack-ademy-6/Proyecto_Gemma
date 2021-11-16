@extends('layouts.app')
@section('content')
    
@if (session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
    
@endif

<h1 class="titulos text-center my-5 display-1">Bienvenidos a RÁPIDO.ES</h1>

















@endsection