<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid d-flex flex-xl-nowrap flex-md-wrap">
        <div class="col-xl-4 col-md-12 col-6 d-md-flex justify-content-md-center justify-content-center">
            <div class="img-header">
                <img alt="Hapo_Learn" src="{{ asset('storage/image/Hapo_Learn.png') }}">
            </div>
            <button class="navbar-toggler collapsed border-0" data-target="#collapsingNavbar" data-toggle="collapse" id="header-button" type="button">
                <span class="navbar-toggler-icon"></span>
                <div class="close-icon py-1">
                    ✖
                </div>
            </button>
        </div>
        <div class="col-xl-8 col-md-12 collapse navbar-collapse d-md-flex flex-md-nowrap justify-content-xl-around justify-content-center mt-lg-4" id="collapsingNavbar">
            <ul class="nav navbar-nav menu-header">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list_course') }}">ALL&nbsp;COURSE</a>
                </li>
                @if (Auth::check())
                @csrf
                <li class="nav-item">
                    <a class="nav-link" href="#">LESON&nbsp;DETAIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LIST&nbsp;LESSON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
                <li class="nav-item logout">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;" class="form-logout">
                            @csrf
                        </form> 
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" data-target="#myModal" data-toggle="modal" href="#">LOGIN/RESGITER</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@include('auth.login-register')
