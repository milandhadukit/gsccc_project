<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-search">
            <span class="searchbar-toggle"> </span>
            <div class="pcoded-search-box ">
                <input type="text" placeholder="Search">
                <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
            </div>
        </div>

    

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Dashboard</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="{{ route('index.deshboard') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main"><?php echo trans('menus.dashboard'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>


        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>C</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main"><?php echo trans('menus.cms'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <ul class="pcoded-submenu">

                    <li class="pcoded-hasmenu ">
                        <a href="{{ route('cms.list') }}">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.list_cms'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>
                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.add_cms'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>

                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.update_cms'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Multi &amp; Language</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main"><?php echo trans('menus.translate_menu'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <ul class="pcoded-submenu">

                    <li class="pcoded-hasmenu ">
                        <a href="{{route('translate.list')}}">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.list_menu'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>
                    <li class="pcoded-hasmenu ">
                        <a href="{{ route('translate.add') }}">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.add_menu'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>

                    {{-- <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.menu-levels.menu-level-22.main"><?php echo trans('menus.update_menu'); ?>

                            </span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li> --}}


                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menus &amp; Pages</div>
        <ul class="pcoded-item pcoded-left-item">

            {{-- <li class="active">
                <a href="">
                    <span class="pcoded-micon"><i class="ti-layout-list-thumb-alt"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Menus</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-list-thumb-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Home</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">

                    {{-- <li class="">
                        <a href="">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert"><?php echo trans('menus.list_menu'); ?></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> --}}
                    {{-- <li class="">
                        <a href="{{ route('menus.add') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert"><?php echo trans('menus.add_menu'); ?></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> --}}
                    {{-- <li class="">
                        <a href="">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert"><?php echo trans('menus.update_menu'); ?></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> --}}
                    

                    <li class="">
                        <a href="{{route('home.list')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert">Slider</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{route('homeabout.page')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert">Home About</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class="">
                        <a href="">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                data-i18n="nav.basic-components.alert">Films / Videos</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>





                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Chart &amp; Maps</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="chart.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main"><?php echo trans('menus.chart'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="map-google.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main"><?php echo trans('menus.maps'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main"><?php echo trans('menus.pages'); ?></span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="auth-normal-sign-in.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="auth-sign-up.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="sample-page.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample
                                Page</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
