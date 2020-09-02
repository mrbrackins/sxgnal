@extends ('layouts.master')
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">s🙅🏿gnal</a>
  @if (Route::has('login'))
  <div class="top-right links">
      @auth
          <a href="{{ url('home') }}">Home</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <button style=" background: none!important;
          border: none;
          padding: 0!important;
          /*optional*/
          font-family: arial, sans-serif;
          /*input has OS specific font-family*/
          color: red;
          cursor: pointer;" type="submit" class="btn btn-primary">
            Logout
        </button>
          </form>
      @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
          @endif
      @endauth
  </div>
@endif
</nav>

@section('content')
    <p>This is my body content.</p>
@endsection

<div class="flex-center position-ref full-height">
 
</div>