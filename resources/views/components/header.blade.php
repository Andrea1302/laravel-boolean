<header>
    @auth
      <h2>
        Hello {{Auth::user()-> name}}
        </h2>  

        <a href="{{route('logout')}}">Logout</a>
    @else
        

    @endauth
</header>