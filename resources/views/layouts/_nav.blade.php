<nav class="nav-box navbar navbar-expand-sm navbar-dark bg-dark shadow-lg sticky-top" aria-label="Main navigation">
    <div class="container-fluid mx-0">
        <a class="navbar-brand titulos fs-2 fst-italic" href="{{route('welcome')}}">RÁPIDO</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
        </button> 
        <div class="collapse navbar-collapse justify-content-between">
            <form class="search-box">
                <input class="form-control box-radius" type="text" placeholder="Search" aria-label="Search">
            </form>
            <div class="navbar-nav mb-sm-0 d-flex align-items-center">
                @auth
                @if (Auth::user()->is_revisor)
                <a href="{{route('revisor.home')}}">
                    <span class="badge box-radius bg-danger fs-6">
                        {{\App\Models\Ad::ToBeRevisionedCount()}}
                    </span>
                </a>
                @endif
                @endauth 
                <a class="fs-6 mx-3 text-decoration-none links badge box-radius bg-success" href="{{route('ad.new')}}"><i class="fas fa-plus"></i> {{__("Anuncio")}}</a>
                @guest
                <a type="button" class="mx-1 links fs-2" href="{{route('login')}}"><i class="fas fa-user-circle"></i></a>
                @endguest
                @auth 
                <form action="{{route('logout')}}" method="POST">
                @csrf
                    <button type="submit" class="links bg-transparent border-0 box-radius mx-1 fs-4" href="#"><i class="fas fa-sign-out-alt"></i></button> 
                </form>
                @endauth
                <ul class="navbar-nav">
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link text-white fs-2 text-uppercase fw-bold" href="#" id="dropdown04"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe-americas"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item icon-band"
                                href="#">@include('layouts.flags._locale',["lang"=>'en','nation'=>'gb'])</a></li>
                            <li><a class="dropdown-item icon-band"
                                href="#">@include('layouts.flags._locale',["lang"=>'it','nation'=>'it'])</a></li>
                            <li><a class="dropdown-item icon-band"
                                href="#">@include('layouts.flags._locale',["lang"=>'es','nation'=>'es'])</a></li>
                        </ul>
                    </li>
                </ul>
            
            </div>
        </div>
    </div>
   
</nav>
