@extends('layouts.app')
@section('content')

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Iniciar sesión</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li> 
                @endforeach
            </ul>
        </div>  
        @endif

        <div class="col-12 col-md-6 offset-md-3 my-3">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-dark box-radius">Acceder</button>
              </form>
              <div class="form-lin d-flex flex-column my-5 text-center">
                <p>¿No tienes ninguna cuenta?</p>
                <a type="submit" class="text-decoration-none" href="{{route('register')}}">Regístrarse</a>
              </div>
              



        </div>
    </div>
</div>

@endsection