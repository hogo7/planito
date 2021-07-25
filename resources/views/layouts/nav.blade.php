<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html" width='165px' height='42px'> <img  width="100%" src="{{asset('img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('index')}}">صفحه  اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}">آزمون ها</a>
                                    </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('blog')}}">بلاگ</a>
                                </li>
                                <li class="nav-item <?php (Auth::check())?"d-none":"";?>">
                                    <a class="nav-link" href="">تماس با ما</a>
                                </li>
                                    @if(Auth::check())
                                <li class="nav-item dropdown <?php (Auth::check())?"":"d-none";?> ">
                                    <!-- go to prof -->
                                    <a class="nav-link dropdown-toggle" href="{{route('blog')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        کاربری
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <!-- go to prof -->
                                        <a class="dropdown-item" href="">{{ Auth::user()->name }}</a>
                                        <!-- go to charts -->
                                    <a class="dropdown-item" href="{{route('chart')}}">نتایج</a>
                                    </div>
                                    @endif
                                </li>
                            @if(Auth::check()||session('admin')=='admin')
                            <li class="d-none d-lg-block">
                                <a class="btn btn-danger" href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">خروج</a>
                                <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                           
                           @else 
                            <li class="d-none d-lg-block">
                                <a class=" btn btn_1"  href="{{route('register')}}">ثبت نام / ورود</a>
                               
                            </li>
                            @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>