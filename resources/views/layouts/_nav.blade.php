<nav class="navbar shadow-lg nav-box sticky-top navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid justify-content-start">
        <a class="navbar-brand titulos fs-2 fst-italic" href="{{route('welcome')}}">RÁPIDO</a>
        <form>
            <input class="search-box" type="text" placeholder="Search" aria-label="Search">
        </form>   
    </div>


    
    <div class="container-fluid justify-content-end">
        <a class="fs-5 mx-3 links" href="{{route('ad.new')}}"><i class="fas fa-plus"></i></a>
        @guest
        <a type="button" class="mx-1 links fs-5" href="{{route('login')}}"><i class="fas fa-user-circle"></i></a>
        @endguest
        @auth
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="links bg-transparent border-0 box-radius mx-1 fs-5" href="#"><i class="fas fa-sign-out-alt"></i></button> 
        </form>
        @endauth
    </div>

  </nav>