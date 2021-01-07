<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
        <div class="navbar navbar-md no-radius">
            <!-- brand -->
            <a class="navbar-brand">
                <div ui-include="{{asset('admin/assets/images/logo.svg')}}"></div>
                <img src="{{asset('admin/assets/images/logo.png')}}" alt="." >
                <span class="hidden-folded inline">BKREA</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">
                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Menu</small>
                    </li>
                    <li>
                        <a href="{{route('homeadmin')}}" >
                            <span class="nav-icon">
                                <i class="material-icons">&#xe3fc;
                                    <span ui-include="'../assets/images/i_0.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe5c3;
                                    <span ui-include="'../assets/images/i_1.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">List Beasiswa</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="{{route('Abeasiswa')}}" >
                                    <span class="nav-text">List Beasiswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('new-beasiswa')}}" >
                                    <span class="nav-text">Tambah Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe5c3;
                                    <span ui-include="'../assets/images/i_1.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Berita</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="{{route('Aberita')}}" >
                                    <span class="nav-text">List Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('new-berita')}}" >
                                    <span class="nav-text">Tambah Berita</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe5c3;
                                    <span ui-include="'../assets/images/i_1.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Ajuan Pemohon</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="{{route('Aajuan')}}" >
                                    <span class="nav-text">List Ajuan Pemohon</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" >
                                    <span class="nav-text">Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html" >
                                    <span class="nav-text">Calendar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
{{--                    <li>--}}
{{--                        <a href="widget.html" >--}}
{{--                            <span class="nav-icon">--}}
{{--                                <i class="material-icons">&#xe8d2;--}}
{{--                                    <span ui-include="'../assets/images/i_3.svg'"></span>--}}
{{--                                </i>--}}
{{--                            </span>--}}
{{--                            <span class="nav-text">Widgets</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
        </div>
        <div flex-no-shrink>
            <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
        </div>
    </div>
</div>
