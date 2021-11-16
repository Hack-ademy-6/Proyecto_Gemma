@extends('layouts.app')
@section('content')

<div class="container vh-100">
    <div class="row justify-content-center">
        <div class="col-md-8 my-4 py-5">
            <div class="card" style="width: 100vh;">
                <div class="card-header titulos h4">
                    Nuevo Anuncio
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('ad.create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="adName" class="my-2">Título</label>
                        <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
                        @error('title')
                            <small id="emailHelp" class="form-text" style="color:red">{{$message}}</small> 
                        @enderror
                    </div>

                    <div class="form-group text-bold my-3">
                        <label for="form-label" class="my-2">Categorías</label>
                        <select name="category" id="categories" class="form-control">
                            @foreach ($categories ?? '' as $category)
                            <option value="{{$category->id}}"
                                {{old('category') == $category->id ? 'selected' : ''}}
                                
                            >{{$category->name}}</option>
                                
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group my-3">
                        <label for="adPrice">Precio</label>
                        <input type="number" step="0,01" class="form-control my-2" id="adPrice" aria-describedby="priceHelp" name="price" value="{{old('price')}}">
                        @error('price')
                        <small id="priceHelp" class="form-text" style="color: red">{{$message}}</small>
                        @enderror

                    </div>

                    <div class="form-group my-3">
                        <label for="adBody" class="my-2">Anuncio</label>
                        <textarea class="form-control" name="body" id="adBody" cols="30" rows="10">{{old('body')}}</textarea>
                        @error('body')
                            <small id="emailHelp" class="form-text" style="color:red">{{$message}}</small> 
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark box-radius my-2">Crear</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection