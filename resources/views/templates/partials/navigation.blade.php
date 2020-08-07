<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Modern Philosophy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
      @if (Auth::check())
            <li class="nav-item active">
              <a class="nav-link" href="#">Стена <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('friend.index')}}">Друзья</a>
            </li>
            <form method="GET" action="{{route('search.results')}}"  class="form-inline my-2 my-lg-0" >
            <input  name = "query" class="form-control mr-sm-2" type="search" placeholder="ищу человека" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">взять факел</button>
          </form>
                     </ul>
     @endif
           <ul class="navbar-nav mr-auto">
        @if (Auth::check())
            <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.index', ['username'=>Auth::user()->username]) }}">
            {{Auth::user()->getNameOrUsername()}} </a></li>
            <a class="nav-link" href="{{route('profile.edit')}}">Обновить профиль</a></li>
            <a class="nav-link" href="{{route('auth.signout')}}">Выйти</a></li>
        @else
            <a class="nav-link" href="{{route('auth.signup')}}">Зарегистрироваться </a></li>
            <a class="nav-link" href="{{route('auth.signin')}}">Войти </a></li>
        @endif
        </div>
    </div>
      </nav>
