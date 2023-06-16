<header id="header" class="header" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between header-container">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <h1>LankaParnter<span>.</span></h1>
        </a>

        <div class="float-right">
            <nav id="navbar" class="navbar float-right">
                <ul>
                    @if(auth('partner')->user())
                        <div class="float-right">
                            <form action="{{route('partner-dashboard')}}">
                                    <button type="submit" class="mobile-nav-btn profile-btn">
                                        <span class="profile-box">
                                             {{auth('partner')->user()->firstName}}
                                        </span>
                                    </button>
                            </form>
                        </div>
                        <div class="float-right">
                            <form action="{{route('partner-dashboard')}}">
                                <button type="submit" class="mobile-nav-btn profile-btn">
                                    <img src="images/{{auth('partner')->user()->image}}" width="40" height="40"
                                         class="rounded-circle">
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="float-right">
                            <form action="{{route('partner-login')}}">
                                <button type="submit"
                                        class="btn btn-primary me-3  heder-btn-item btn-square mobile-nav-btn">
                                    Login
                                </button>
                            </form>
                        </div>
                        <div class="float-right">
                            <form action="{{route('partner-register')}}">
                                <button type="submit"
                                        class="btn btn-primary me-3  heder-btn-item btn-square mobile-nav-btn">
                                    Register
                                </button>
                            </form>
                        </div>
                    @endif
                    <div class="float-right">
                        <form action="">
                            <button type="submit"
                                    class="btn btn-warning me-3  heder-btn-item btn-square mobile-nav-btn">
                                Post your Ad
                                Free
                            </button>
                        </form>
                    </div>
                        <div class="float-right icon-box">
                            <a href=""><i class="bi bi-bell" style="color: #5578ff;"></i></a>
                        </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
        </div>
    </div>



