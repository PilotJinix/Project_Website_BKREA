<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Home')
    @include('layouts.head')
</head>

<body>
<!--Preloader-->
<div id="preloader" class="preloader">
    <div class="preloader-inner">
        <div class="preloader-6">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--/-->
<!--Header-->
<header class="app-header app-header-1 light">
    <div class="header-nav">
        @include('layouts.navbar')
    </div>
</header>
<!--/-->
<!--Sidenav-->
<div class="app-sidenav app-sidenav-1">
    @include('layouts.sidebar')
    <span class="sidenav-close"></span>
</div>
<!--/-->
<!--Shopping Cart-->
<div class="app-shopping-cart app-shopping-cart-1">
{{--    @include('layouts.cartlist')--}}
</div>
<!--/-->
<!--Hero-->
<section class="section section-hero section-hero-1 overlay-color overlay-pattern">
    <div class="display-center">
        <div class="el-slider">
            <div class="el-swiper-hero-2 swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="el-item overlay-image" style="
                    background-image: url(assets/images/Dasboard/book.jpg);
                  "></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="el-item overlay-image" style="
                    background-image: url(assets/images/Dasboard/shutterstock_423025330.png);
                  "></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="el-item overlay-image" style="
                    background-image: url(assets/images/Dasboard/2048566809.jpg);
                  "></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <span class="bg-color bg-dark-30"></span>
    <span class="bg-pattern bg-pattern-3"></span>
    <div class="hero-inner display-center">
        <div class="hero-content text-center">
            <h1>Beasiswa Kreativitas</h1>
            <p class="text-dark">
                Akan Mengawal Dari Awal
            </p>
        </div>
    </div>
</section>
<!--/-->
<!--Features-->
<section class="section section-features-line section-features-line-1 center">
    <div class="display-spacing">
        <div class="container">
            <div class="el-box">
                <div class="row row-sm">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="item">
                            <img src="assets/images/icons/user.png" alt="--Alternative--" />
                            <h2>Semua Kalangan</h2>
                            <p>Pasti dikonfirmasi</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="item">
                            <img src="assets/images/icons/fl-4.png" alt="--Alternative--" />
                            <h2>Pencairan</h2>
                            <p>Coba cek Website sebelah</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="item">
                            <img src="assets/images/icons/fl-3.png" alt="--Alternative--" />
                            <h2>Biaya Pendidikan</h2>
                            <p>Pasti Sangat Terbantu</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="item">
                            <img src="assets/images/icons/fl-2.png" alt="--Alternative--" />
                            <h2>24 jam</h2>
                            <p>Kami Siap Membantu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->
<!--Features-->
<section class="section section-features section-features-7">
    <div class="container">
        <div class="row row-sm">
            <div class="col-lg-8 col-xl-8">
                <div class="el-item el-hover el-item-1 pt-50pe">
                    <div class="image overlay-image" style="background-image: url(assets/images/Dasboard/rode.jpg)">
                    </div>
                    <div class="display-center">
                        <div class="inner">
                            <h2 class="title" style="color: white">BKREA<br />Beasiswa Kreativ</h2>
                            <a href="#" class="button button-sm button-dark mt-20">
                                <span class="text">List Beasiswa</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="row row-sm">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                        <div class="el-item el-hover pt-50pe">
                            <div class="image overlay-image" style="
                      background-image: url(assets/images/Dasboard/GOP9a_2.jpeg);
                    "></div>
                            <div class="display-center">
                                <div class="inner">
                                    <h3 class="title title-2" style="color: white">
                                        Beasiswa<br />
                                        Dengan Predikat<br />
                                        Terbaik
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                        <div class="el-item el-hover pt-50pe bg-primary overlay-color">
                            <div class="display-center">
                                <div class="inner">
                                    <h3 class="title title-2 text-light">
                                        Dapatkan Beasiswa<br />
                                        yang anda inginkan &<br />Raih Cita Cita
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->
<!--Products-->
<section class="section section-products section-products-1">
    <div class="display-spacing">
        <div class="container">
            <header class="el-heading el-heading-1 center">
                <h2>Daftar Beasiswa</h2>
                <p>Ayo Daftar Kawan Kawan</p>
            </header>
            <div class="el-data-filters">
                <div class="el-data-filters-content">
                    <ul class="row row-sm justify-content-md-center">
                        <!--Item-->
                        @foreach ($data as $dataa)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="el-card el-card-blog el-card-blog-1 el-hover">
                                <div class="post-image">
                                    <img src="{{asset('storage/beasiswa/'.$dataa->gambar)}}" alt="--Alternative--">
                                    <a href="{{route('detailbea',$dataa->id)}}" class="button button-read-more">
                                        <span class="text">Read More</span>
                                    </a>
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="{{route('detailbea',$dataa->id)}}" title="Fila Locker Room Varsity Jacket">
                                            <span class="text">{{__($dataa->nama_beasiswa)}}</span>
                                        </a>
                                    </h3>
                                    <p>{{__($dataa->deskripsi)}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--/-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->
<!--Call-To-Action-->
<section class="section section-cta section-cta-7 overlay-image mt--30"
         style="background-image: url(assets/images/Dasboard/Kuliah-1024x569.jpg)">
    <div class="display-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <header class="el-heading el-heading-4">
                        <h2 style="color: white">
                            Ada Banyak Sekali <span class="bigger text-gradient">Beasiswa</span> Lho.<br />
                            Yang Siap Menyambutmu
                        </h2>
                        <p class="mb-75" style="color: white">
                            Pastikan Beasiswamu.
                        </p>
                    </header>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->

<!--Footer-->
<footer class="app-footer app-footer-1">
    <div class="footer-copyright">
        <div class="container">
            <p><span class="text-bold">BKREA</span> Beasiswa Kreativitas</p>
            <p class="text-2">BKREA © 2020 Muhammad Agung Santoso</p>
        </div>
    </div>
</footer>
<!--/-->
<div class="afra-demo">
    <div class="afra-demo-panel">
            <span class="afra-demo-close">
                <i class="ti-close"></i>
            </span>
        <span class="afra-demo-title">Demo Options</span>
        <span class="afra-demo-subtitle">- Color Schemes</span>
        <ul class="afra-demo-colors">
            <li class="afra-demo-color-1" style="background-color: orange"></li>
            <li class="afra-demo-color-2" style="background-color: #de5881"></li>
            <li class="afra-demo-color-3" style="background-color: #0b7554"></li>
            <li class="afra-demo-color-4" style="background-color: #7b1f29"></li>
            <li class="afra-demo-color-5" style="background-color: #00b7b8"></li>
            <li class="afra-demo-color-6" style="background-color: #33b5e5"></li>
        </ul>
        <ul class="afra-demo-colors">
            <li class="afra-demo-color-7" style="background-color: #1d3268"></li>
            <li class="afra-demo-color-8" style="background-color: #00897b"></li>
            <li class="afra-demo-color-9" style="background-color: #ff5e14"></li>
            <li class="afra-demo-color-10" style="background-color: #fdb415"></li>
            <li class="afra-demo-color-11" style="background-color: #c89454"></li>
            <li class="afra-demo-color-12" style="background-color: hotpink"></li>
        </ul>
        <ul class="afra-demo-colors">
            <li class="afra-demo-color-13" style="background-color: #ac5f33"></li>
            <li class="afra-demo-color-14" style="background-color: #e79e7e"></li>
            <li class="afra-demo-color-15" style="background-color: #ffcdb4"></li>
            <li class="afra-demo-color-16" style="background-color: #e8a384"></li>
            <li class="afra-demo-color-17" style="background-color: #f9b689"></li>
            <li class="afra-demo-color-18" style="background-color: #ffcba6"></li>
        </ul>
        <ul class="afra-demo-colors">
            <li class="afra-demo-color-19" style="background-color: #a45223"></li>
            <li class="afra-demo-color-20" style="background-color: #d88c75"></li>
            <li class="afra-demo-color-21" style="background-color: #f7c3b6"></li>
            <li class="afra-demo-color-22" style="background-color: #dc9263"></li>
            <li class="afra-demo-color-23" style="background-color: #e9b876"></li>
            <li class="afra-demo-color-24" style="background-color: #d78150"></li>
        </ul>
    </div>
{{--    <div class="afra-demo-toggle">--}}
{{--        <i class="ti-settings"></i>--}}
{{--    </div>--}}
</div>
<!--Scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/main-scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/demo.js"></script>
<!--/-->
</body>

</html>
