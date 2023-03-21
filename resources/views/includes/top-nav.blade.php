<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            {{-- <a href="index.html">
                <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
            </a> --}}
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>

                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <a href="#!">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink"></span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        {{-- <li>
                            <div class="media">
                                <img class="d-flex align-self-center" src="assets/images/user.png"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">John Doe</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                        elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li> --}}
                        <li>

                        </li>

                    </ul>
                </li>

                <li class="user-profile header-notification">
                    <a href="#!">
                        {{-- <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> --}}
                        <span>{{ Auth::user()->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="#!">
                                <i class="ti-settings"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-email"></i> My Messages
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-lock"></i> Language Change
                            </a>

                        </li>

                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="javascript:void(0)">
                                    <select class="form-control changeLang">
                                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                                            English</option>
                                        <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : '' }}>
                                            Gujrati</option>
                                        <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>
                                            Hindi</option>
                                    </select>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                               <i class="ti-layout-sidebar-left"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
