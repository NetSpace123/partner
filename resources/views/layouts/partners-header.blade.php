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
                        <form action="{{route('addadvertisement')}}">
                            <button type="submit"
                                    class="btn btn-warning me-3  heder-btn-item btn-square mobile-nav-btn">
                                Post your Ad
                                Free
                            </button>
                        </form>
                    </div>
                        <ul class="navbar-nav d-flex flex-row me-1">
                                <li class="nav-item me-3 me-lg-0">
                                    <div class="dropdown">
                                        <a class="" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-bell fa-xl"></i>
                                            @if(auth('partner')->user() && auth('partner')->user()->unreadNotifications()->count() > 0)
                                                    <span class="badge rounded-pill badge-notification bg-danger">
                                                      {{auth('partner')->user()->unreadNotifications()->count()}}
                                                   </span>
                                            @endif
                                        </a>

                                        @if(auth('partner')->user() && auth('partner')->user()->unreadNotifications()->count() > 0)
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                            @foreach(auth('partner')->user()->unreadNotifications as $notification)
                                            <li>
                                                <a class="dropdown-item" href="{{route('partner.notifications.single.read',$notification->id)}}">
                                                    <span class="font-weight-bold">
                                                        Congratulations !!! on your {{$notification->data['name']}} advertisement.
                                                    </span>
                                                </a>
                                            </li>
                                            @endforeach
                                                <li>
                                                    <a class="dropdown-item text-center small color-gray" href="{{route('partner.notifications.read')}}">
                                                        <span class="mark-as-readed">
                                                            Mark All as Readed
                                                        </span>
                                                    </a>
                                                </li>
                                        </ul>
                                        @endif
                                    </div>
                                </li>
                            </ul>

                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
        </div>
    </div>
</header>
