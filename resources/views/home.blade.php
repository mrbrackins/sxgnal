@extends('layouts.app')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">sXgnal</a>
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
    <div class="col-lg-8 pr-lg-2">
      <div class="card mb-3">
        <div class="card-header bg-light">
          <div class="media align-items-center">
            <div class="avatar avatar-m">
              <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="">
            </div>
            <div class="media-body ml-2">
              <h5 class="mb-0 fs-0">Create post</h5>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <form data-children-count="2"><textarea class="form-control border-0 rounded-0 resize-none" placeholder="What do you want to talk about?" rows="4"></textarea>
            <div class="d-flex align-items-center border-y px-3 mt-1" data-children-count="1"><label class="text-nowrap mb-0 mr-2" for="hash-tags"><svg class="svg-inline--fa fa-plus fa-w-14 mr-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" data-children-count="0"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <span class="fas fa-plus mr-1 fs--2"></span> --><span class="font-weight-regular" data-children-count="0">Add hashtag</span></label><input class="form-control border-0 fs--1" id="hash-tags" type="text" placeholder="Help the right person to see"></div>
            <div class="row no-gutters justify-content-between mt-3 px-3 pb-3">
              <div class="col"><button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0" type="button"><img class="cursor-pointer" src="../assets/img/illustrations/image.svg" width="17" alt=""><span class="ml-2 d-none d-md-inline-block">Image</span></button><button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1" type="button"><img class="cursor-pointer" src="../assets/img/illustrations/calendar.svg" width="17" alt=""><span class="ml-2 d-none d-md-inline-block">Event</span></button><button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1" type="button"><img class="cursor-pointer" src="../assets/img/illustrations/location.svg" width="17" alt=""><span class="ml-2 d-none d-md-inline-block text-nowrap">Check in</span></button></div>
              <div class="col-auto">
                <div class="dropdown d-inline-block mr-1"><button class="btn btn-sm dropdown-toggle px-1" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-globe-americas fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"></path></svg><!-- <span class="fas fa-globe-americas"></span> --></button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Public</a><a class="dropdown-item" href="#">Private</a><a class="dropdown-item" href="#">Draft</a></div>
                </div><button class="btn btn-primary btn-sm px-4 px-sm-5" type="submit">Share</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <div class="card mb-3">
        <div class="card-header bg-light">
          <div class="row justify-content-between">
            <div class="col">
              <div class="media">
                <div class="avatar avatar-2xl">
                  <img class="rounded-circle" src="../assets/img/team/15.jpg" alt="">
                </div>
                <div class="media-body align-self-center ml-2">
                  <p class="mb-1 line-height-1"><a class="font-weight-semi-bold" href="#">Margot Robbie</a></p>
                  <p class="mb-0 fs--1">Yesterday • Dalby • <svg class="svg-inline--fa fa-users fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg><!-- <span class="fas fa-users"></span> --></p>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <div class="dropdown text-sans-serif"><button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-article-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-article-action">
                  <div class="bg-white py-3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
       <p>Hello World!</p>
        </div>
        <div class="card-footer bg-light pt-0">
          <div class="border-bottom border-200 fs--1 py-3"><a class="text-700" href="#!">34 Comments</a></div>
          <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
            <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#!"><img src="../assets/img/illustrations/like-inactive.png" width="20" alt=""><span class="ml-1">Like</span></a></div>
            <div class="col-auto"><a class="rounded d-flex align-items-center mr-3" href="#!"><img src="../assets/img/illustrations/comment-active.png" width="20" alt=""><span class="ml-1">Comment</span></a></div>
            <div class="col-auto d-flex align-items-center"><a class="rounded text-700 d-flex align-items-center" href="#!"><img src="../assets/img/illustrations/share-inactive.png" width="20" alt=""><span class="ml-1">Share</span></a></div>
          </div>
          <form class="d-flex align-items-center border-top border-200 pt-3" data-children-count="1">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" data-children-count="0">
            </div><input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment...">
          </form>
          <div class="media mt-3">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="">
            </div>
            <div class="media-body ml-2 fs--1">
              <p class="mb-1 bg-200 rounded-soft p-2"><a class="font-weight-semi-bold" href="#">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
              <div class="px-2"><a href="#!">Like</a> • <a href="#!">Reply</a> • 23min </div>
            </div>
          </div>
          <div class="media mt-3">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="">
            </div>
            <div class="media-body ml-2 fs--1">
              <p class="mb-1 bg-200 rounded-soft p-2"><a class="font-weight-semi-bold" href="#">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆</p>
              <div class="px-2"><a href="#!">Like</a> • <a href="#!">Reply</a> • 3hrs </div>
            </div>
          </div><a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
        </div>
      </div>
      
      
      
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
  <example-component></example-component>

@endsection
