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
    <div class="col-lg-8 pr-lg-2">
        {{-- CREATE POST --}}
      
      {{-- END CREATE POST --}}
      <create-post
      user_id="{{$currentUser->id}}"
      api_token="{{$currentUser->api_token}}">
    </create-post>
      {{-- SHOW POSTS --}}

      
    <show-posts 
  allusers="{{$allusers}}"
    user_name="{{$currentUser->name}}"
    user_id="{{$currentUser->id}}"
    api_token="{{$currentUser->api_token}}"
    >
  </show-posts>

     
      {{--END  SHOW POSTS --}}
      
      
      
    </div>
    <div class="col-lg-4 pl-lg-2">
      <div class="card mb-3 mt-3 mt-lg-0">
        <div class="card-body fs--1">
          <div class="media"><svg class="svg-inline--fa fa-gift fa-w-16 fs-0 text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gift" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"></path></svg><!-- <span class="fas fa-gift fs-0 text-warning"></span> -->
            <div class="media-body ml-2"><a class="font-weight-semi-bold" href="#">Emma Watson</a>'s Birthday is today</div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
          <h5 class="mb-0">People to follow</h5><a class="fs--1" href="#!">See all</a>
        </div>
        <div class="card-body">
          <div class="media">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="">
            </div>
            <div class="media-body ml-2">
              <h6 class="mb-0"><a href="#">Katheryn Winnick</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><svg class="svg-inline--fa fa-user-plus fa-w-20" data-fa-transform="shrink-5 left-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(320 256)"><g transform="translate(-64, 0)  scale(0.6875, 0.6875)  rotate(0 0 0)"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" transform="translate(-320 -256)"></path></g></g></svg><!-- <span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span> --><span class="fs--1">Follow</span></button>
              <hr class="border-bottom-0 border-dashed">
            </div>
          </div>
          
        </div>
      </div>
      <div class="card mb-3 mb-lg-0">
        <div class="card-header bg-light">
          <h5 class="mb-0">You may interested</h5>
        </div>
        <div class="card-body fs--1">
          <div class="media btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
            <div class="media-body position-relative pl-3">
              <h6 class="fs-0 mb-0"><a href="#">Newmarket Nights</a></h6>
              <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
              <p class="text-1000 mb-0">Time: 6:00AM</p>
              <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
              <hr class="border-dashed border-bottom-0">
            </div>
          </div>
          
        </div>
        <div class="card-footer bg-light py-0 border-top"><a class="btn btn-link btn-block" href="#">All Events<svg class="svg-inline--fa fa-chevron-right fa-w-10 ml-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right ml-1 fs--2"></span> --></a></div>
      </div>
    </div>
  </div>
  

@endsection
