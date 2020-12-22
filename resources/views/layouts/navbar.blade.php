<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="header-logo"><span>BKREA</span></div>
            <ul class="menu">
                <li class="el-megamenu el-megamenu-xs">
                    @guest
                        <a href="#">
                            <span class="text text-light">Beranda</span>
                        </a>
                    @else
                        <a href="#">
                            <span class="text text-light">Beranda</span>
                        </a>
                    @endguest
                </li>
                <li class="el-megamenu el-megamenu-lg">
                    <a href="#">
                        <span class="text text-light">List Beasiswa</span>
                        <i class="ti-angle-down hidden-lg-up"></i>
                    </a>
                </li>
                <li class="el-megamenu el-megamenu-lg">
                    <a href="#">
                        <span class="text text-light">Berita</span>
                        <i class="ti-angle-right hidden-lg-up"></i>
                    </a>
                </li>
                @guest
                @else
                    @if ($akun->status == 'mitra')
                        <li class="el-megamenu el-megamenu-lg">
                            <a href="#">
                                <span class="text text-light">Ajukan Produk Anda</span>
                                <i class="ti-angle-right hidden-lg-up"></i>
                            </a>
                        </li>
                    @endif
                @endguest
            </ul>
            <button class="button button-menu button-display-sidenav">
                <span></span>
            </button>
        </div>
        <div class="col-md-4 text-right">
            @guest
            @else
                <button type="button" class="button button-icon button-icon-cart button-display-shopping-cart">
                    <img class="icon" src="{{asset("assets/images/icons/shopping-cart-light.svg")}}"
                         alt="--Alternative--" />
                </button>
            @endguest
            <ul class="log-in-out" style="height: 100%;">
                <li class="el-megamenu el-megamenu-xs align-content-center"
                    style="line-height: 0!important; height: 60px;">
                    <button class="button button-icon">
                        <img class="icon log-svg" src="{{asset('assets/images/icons/login.png')}}" alt="">
                        @guest
                        @else
                            <label style="cursor: pointer" class="text-light font-weight-normal">{{$akun->username}}</label>
                        @endguest
                    </button>
                    <i class="ti-angle-down hidden-lg-up"></i>
                    <div class="el-megamenu-box">
                        <ul class="el-list text-left">
                            @guest
                                <li>
                                    <a href="#">
                                        <span class="text">Login</span>
                                    </a>
                                </li>
{{--                                @if (Route::has('register'))--}}
                                    <li>
                                        <a href="#">
                                            <span class="text">Register</span>
                                        </a>
                                    </li>
{{--                                @endif--}}
                            @else
                                <li>
                                    <a href="#">
                                        <span class="text">{{__('Profile')}}</span>
                                    </a>
                                </li>
                                @if ($akun->status == 'mitra')
                                    <li>
                                        <a href="#">
                                            <span>{{__('Riwayat Ajuan Produk')}}</span>
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a href="#">{{__('Logout')}}</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
