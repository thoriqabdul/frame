<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand sticky_logo" href="#">
            <img src="{{asset('client/img/logo-w.png')}}" srcset="{{asset('client/img/logo-w2x.png')}} 2x" alt="logo">
            <img src="{{asset('client/img/logo.png')}}" srcset="{{asset('client/img/logo-2x.png')}} 2x" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_toggle">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="hamburger-cross">
                    <span></span>
                    <span></span>
                </span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item dropdown submenu">
                    @if (Auth::check())
                        <a class="nav-link dropdown-toggle" href="{{route('homes.index')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                        </a>
                    @endif
                    
                </li>
            </ul>
            @if (Auth::check())
            <a class="nav_btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="icon_signout"></i>{{Auth::user()->name}}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a class="nav_btn" href="{{ route('login') }}"><i class="icon_profile"></i>Log In</a>
            @endif
            
        </div>
    </div>
</nav>