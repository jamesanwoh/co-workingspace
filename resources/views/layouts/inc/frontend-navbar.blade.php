<!-- header start -->
    <header class="header-2">
        <div class="mobile-fix-option"></div>
        <div class="top-header top-header-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Co-working Space</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +234 - 000 - 000 - 000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i> My Account
                                <ul class="onhover-show-div">
                                    {{-- <li><a href="#" data-lng="en">Login</a></li>
                                    <li><a href="#" data-lng="es">Logout</a></li> --}}

                                    @if (Route::has('login'))
                                     <div>
                                        @auth
                                            <a href="{{ url('/dashboardUser') }}"> My Dashboard</a><br/>
                                            <a href="{{ url('UserProfile') }}"> My profile</a><br/>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>

                                        @else
                                           <li> <a href="{{ route('login') }}">Login</a></li><br>

                                            @if (Route::has('register'))
                                               <li> <a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                  @endif

                                </ul>
                            </li>
                             <!-- Authentication Links -->
                             @guest
                             @else
                                 <li class="nav-item dropdown"><img src="{{asset('uploads/profile/'.Auth::user()->image)}}" class="rounded-circle"  width="30" height="30" alt="...">
                                   &nbsp; {{ Auth::user()->Username }}

                                </li>
                             @endguest
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu border-section border-top-0">
                        <div class="menu-left">
                            <div class="navbar"><a href="javascript:void(0)" onclick="openNav()"><i
                                        class="fa fa-bars sidebar-bar" aria-hidden="true"></i></a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <a href="javascript:void(0)" onclick="closeNav()">
                                            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i>Go Back</div>
                                        </a>
                                        <!-- Vertical Menu -->
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li><a href="{{url('services')}}">High End / Full Service</a>
                                            </li>
                                            <li><a href="{{url('services')}}">Co-operate / Professional</a>
                                            </li>
                                            <li><a href="{{url('services')}}">Private Work Space</a>
                                            </li>
                                            <li><a href="{{url('services')}}">Minimal / Bare bone</a>
                                            </li>
                                            <li><a href="{{url('services')}}">Shared Space / Subline</a>
                                            </li>
                                            <li><a href="{{url('services')}}">Industry Specification / Specializied</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="brand-logo layout2-logo">
                            <a href="#"><img src="../assets/images/icon/logo/1.png" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                        <div class="menu-right pull-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-nav-center">
                        <nav id="main-nav">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li>
                                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                </li>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('about-Us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{url('contact-Us')}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{url('services')}}">Services</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header end -->

