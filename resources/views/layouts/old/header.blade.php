<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light ">
    <a class=" font-weight-bold text-dark display-1" href="#"> <h1>پلنیتو  </h1> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="#"> صفحه اصلی<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#">بلاگ و درباره ما  </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto float-left">
        @guest
        <li class="nav-item m-2 myRounded">
          <a class="  btn btn-dark myRounded" href="{{ route('login') }}">ورود</a>
        </li>
            @if (Route::has('register'))
            <li class="nav-item m-2 " style="border-radius: 400px;">
              <a class=" btn  btn-outline-dark myRounded" href="{{ route('register') }}">ثبت نام</a>
            </li>

            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item btn btn-outline-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
      </ul>

    </div>
  </nav>
