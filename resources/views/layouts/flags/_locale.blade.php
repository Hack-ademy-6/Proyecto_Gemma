
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <form action="{{route('locale',['locale'=>$lang])}}" method="POST">
        @csrf
            <a class="nav-link fs-2 popover-button bj-button bj-button--ghost bj-button--sm track text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-globe-americas"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark menu " aria-labelledby="navbarDarkDropdownMenuLink">
                @include('layouts.flags._other', ["lang"=>'es','nation'=>'es'])
                @include('layouts.flags._other', ["lang"=>'en','nation'=>'gb'])
                @include('layouts.flags._other', ["lang"=>'it','nation'=>'it'])
            </ul>
        </form>
    </li>
</ul>