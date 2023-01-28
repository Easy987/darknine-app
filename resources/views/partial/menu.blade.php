<nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2><a href="javascript:void(0);">D9 Dark Nine</a></h2>
    <a href="#0" class="cd-close">Bezárás</a>
    <ul class="cd-dropdown-content">
        <li><a href="{{ route('darknine.app.index') }}">kezdőlap</a></li>
        <li><a href="{{ route('darknine.app.about') }}">rólunk</a></li>
        <li><a href="{{ route('darknine.app.gallery') }}">galéria</a></li>
        <li><a href="https://www.facebook.com/D9.club.bp" target="_blank">események</a></li>
        <li><a href="{{ route('darknine.app.contact') }}">kapcsolat</a></li>
        <li><a href="{{ route('darknine.app.auth.login') }}">fiók</a></li>
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="container">

    <!-- mobile menu area start -->
    <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="row">
            <div class="col-md-6">
                <div class="cp_logo_wrapper">
                    <a href="javascript:void(0);">
                        <img src="assets/images/new/logo/logo_64.png" alt="logo">
                        D9 Dark Nine
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cd-dropdown-wrapper">
                    <a class="house_toggle" href="#0">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px"
                             viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;"
                             xml:space="preserve" width="25px" height="25px">
                                <g>
                                    <g>
                                        <path class="menubar"
                                              d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                              fill="#004165"/>
                                    </g>
                                    <g>
                                        <path class="menubar"
                                              d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                              fill="#004165"/>
                                    </g>
                                    <g>
                                        <path class="menubar"
                                              d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                              fill="#004165"/>
                                    </g>
                                    <g>
                                        <path class="menubar"
                                              d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                              fill="#004165"/>
                                    </g>
                                    <g>
                                        <path class="menubar"
                                              d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                              fill="#004165"/>
                                    </g>
                                </g>
                            </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="jb_navigation_wrapper index2_wrapper_navigation">
        <div class="mainmenu index2_mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
            <ul class="main_nav_ul index2_main_nav_ul">
                <li><a href="{{ route('darknine.app.index') }}" class="gc_main_navigation">kezdőlap</a></li>
                <li><a href="{{ route('darknine.app.about') }}" class="gc_main_navigation">rólunk</a></li>
                <li><a href="{{ route('darknine.app.gallery') }}" class="gc_main_navigation">galéria</a></li>
                <li class="logo_desing_wrapper index2_logo_wrapper">
                    <a href="javascript:void(0);"><img src="assets/images/new/logo/logo.png" style="height: 64px;" alt="img"></a>
                </li>
                <li><a href="https://www.facebook.com/D9.club.bp" target="_blank"
                       class="gc_main_navigation">események</a></li>
                <li><a href="{{ route('darknine.app.contact') }}" class="gc_main_navigation">kapcsolat</a></li>
                <li><a href="{{ route('darknine.app.profile') }}" class="gc_main_navigation">fiók</a></li>
                @auth
                <li><a href="{{ route('darknine.app.auth.logout') }}" class="gc_main_navigation">kijelentkezés</a></li>
                @endauth
            </ul>
        </div>
    </div>
</div>
