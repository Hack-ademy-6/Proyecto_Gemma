<nav class="navbar shadow-lg nav-box navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid justify-content-start">
        <a class="navbar-brand titulos fs-2 fst-italic" href="{{route('welcome')}}">RÁPIDO</a>
        <form>
            <input class="search-box" type="text" placeholder="Search" aria-label="Search">
        </form>   
    </div>


    
    <div class="container-fluid justify-content-end">
        <a class=" fs-2 mx-1 links" href="{{route('ad.new')}}"><i class="fas fa-ad"></i></a>
        @guest
        <a type="button" class="btn btn-outline-light box-radius text-decoration-none mx-1" href="{{route('login')}}">Iniciar sesión</a>
        @endguest
        @auth
        <form action="{{route('logout')}}" method="POST">
        @csrf
        </form>
        <a type="button" class="btn btn-outline-light box-radius mx-1" href="#">Desconectar</a> 
        @endauth
    </div>

  </nav>