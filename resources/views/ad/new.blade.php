@extends('layouts.app')
@section('content')

<div class="container vh-100">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5 py-5">
            <div class="card" style="width: 100vh;">
                <div class="card-header titulos h3">
                    Nuevo Anuncio
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('ad.create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="adName">Título</label>
                        <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
                        @error('title')
                            <small id="emailHelp" class="form-text" style="color:red">{{$message}}</small> 
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="adBody">Anuncio</label>
                        <textarea class="form-control" name="body" id="adBody" cols="30" rows="10">{{old('body')}}</textarea>
                        @error('body')
                            <small id="emailHelp" class="form-text" style="color:red">{{$message}}</small> 
                        @enderror
                    </div>

                    <button type="button" class="btn btn-dark box-radius my-2">Crear</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection