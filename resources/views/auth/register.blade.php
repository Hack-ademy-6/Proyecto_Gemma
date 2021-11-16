@extends('layouts.app')
@section('content')

<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Registrate</h2>
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
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  <span id="passwordHelpInline" class="form-text">
                    Debe contener entre 8-20 carácteres.
                  </span>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                    <span id="passwordHelpInline" class="form-text">
                        Debe contener entre 8-20 carácteres.
                      </span>
                  </div>

                <button type="submit" class="btn btn-dark box-radius">Registrarse</button>
              </form>
              <div class="form-lin d-flex flex-column my-5 text-center">
                <p>¿Ya tienes una cuenta?</p>
                <a type="submit" class="text-decoration-none" href="{{route('login')}}">Iniciar sesión</a>
              </div>



        </div>
    </div>
</div>

@endsection