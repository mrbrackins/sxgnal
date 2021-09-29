@extends('layouts.app')
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
            display:inline;
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

<!-- Don't delete -->
<div class="row no-gutters" style="margin-left: 10">
    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

    </div>

    <img src="images/{{ Session::get('image') }}">

    @endif



    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
    <!-- End Don't delete -->


   
{{-- Plan of Action --}}
    <plan-of-action></plan-of-action>
      



    

@endsection
