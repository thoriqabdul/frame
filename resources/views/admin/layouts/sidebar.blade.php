<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('home.index')}}" aria-expanded="false"><i class="fas fa-clock fa-fw"
                            aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                {{-- @if (Auth::user()->role_id == 1) --}}
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('publish.index')}}" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Anggota</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('home.user')}}" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Client</span></a>
                </li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('slider.index')}}" aria-expanded="false"><i class="fa fa-globe"
                        aria-hidden="true"></i><span class="hide-menu">Slider</span></a></li>
                @endif
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('cate.index')}}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Category</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('nas.index')}}" aria-expanded="false"><i class="fa fa-table"
                            aria-hidden="true"></i><span class="hide-menu">Script konfirmasi</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('home.terima')}}" aria-expanded="false"><i class="fa fa-font"
                            aria-hidden="true"></i><span class="hide-menu">Script di Terima</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('home.tolak')}}" aria-expanded="false"><i class="fa fa-globe"
                            aria-hidden="true"></i><span class="hide-menu">Script di Tolak</span></a></li> --}}
                {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="blank.html" aria-expanded="false"><i class="fa fa-columns"
                            aria-hidden="true"></i><span class="hide-menu">Blank</span></a></li> --}}
                {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="404.html" aria-expanded="false"><i class="fa fa-info-circle"
                            aria-hidden="true"></i><span class="hide-menu">404</span></a></li> --}}
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" aria-expanded="false"><i class="fa fa-info-circle"
                            aria-hidden="true"></i><span class="hide-menu">Log Out</span></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>