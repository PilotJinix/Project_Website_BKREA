<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Detail Beasiswa')
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
<header class="app-header app-header-1 ${props.class} light">
    <div class="header-nav bg-primary">
        @include('layouts.navbar')
    </div>
</header>
<!--/-->
<!--Sidenav-->
<div class="app-sidenav app-sidenav-1">
    @include('layouts.sidebar')
</div>
<!--/-->


<section class="section section-page section-product-detail section-product-detail-1">
    <div class="display-spacing mt-space">
        <div class="container mb-space">
            <div class="row">
                <!--Images-->
                <div class="col-lg-6">
                    <div class="product-images">
                        <div class="el-slider el-slider-product-image el-slider-product-image-1">
                            <!-- Swiper -->
                            <div class="el-swiper-product-images el-swiper-product-images-1 swiper-container"
                                 data-slider-index="4">
                                <div class="swiper-wrapper pb-100">
                                    <div class="swiper-slide">
                                        <div class="el-product-image">
                                            <img src="{{asset('storage/beasiswa/'.$data->gambar)}}"
                                                 data-zoom-image="{{asset('storage/beasiswa/'.$data->gambar)}}"
                                                 class="el-image-zoom" alt="--Alternative--" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="el-swiper-dots"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/-->
                <!--Details-->
                <div class="col-lg-6">
                    <div class="product-detail social">
                        <h1>
                            {{__($data->nama_beasiswa)}}
                        </h1>
                        <div class="product-table">
                            <ul>
                                <li>
                                    <span class="var">Nama Instansi</span>
                                    <span class="val">{{__($data->nama_intansi)}}</span>
                                </li>
                                <li>
                                    <span class="var">Tanggal Pembuatan</span>
                                    <span class="val">{{__($data->created_at)}}</span>
                                </li>
                                <li>
                                    <span class="var">Kuota</span>
                                    <span class="val">{{__($data->kuota)}}</span>
                                </li>
                            </ul>
                        </div>
                        <form action="{{route('lanjutisi', ['id'=>$data->id])}}" method="get">
                            <div class="row row-0">
                                <div class="col-12 mt-3">
                                        <button class="button button-md button-block button-dark text-center"
                                                type="submit">
                                            <span class="ti-bag"></span>
                                            <span class="text">Daftar Sekarang</span>
                                        </button>
                                </div>
                            </div>
                        </form>
                        <div class="shareit">
                            <ul class="el-social-icons block">
                                <li class="bg-facebook">
                                    <a href="#" target="blank">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li class="bg-twitter">
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="blank"
                                       data-show-count="false"><i class="ti-twitter"></i></a>
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
                                    </script>
                                </li>
                                <li class="bg-instagram">
                                    <a href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/-->
            </div>
        </div>
        <div class="container">
            <div class="el-tabs">
                <!--Links-->
                <div class="el-tabs-links el-tabs-links-2">
                    <ul>
                        <li class="active" data-tab-link="tab-1">
                            <span class="text">Description</span>
                        </li>
                    </ul>
                </div>
                <!--/-->
                <!--Content-->
                <div class="el-tabs-content">
                    <ul>
                        <li class="active" data-tab-content="tab-1">
                            <div class="content">
                                <h2>Informasi Beasiswa</h2>
                                {!!$data->deskripsi!!}
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/-->
            </div>
        </div>
    </div>
</section>
<!--/-->

<!--Footer-->
<footer class="app-footer app-footer-1">
    <div class="footer-copyright">
        <div class="container">
            <p><span class="text-bold">WG FARM</span> organic and wellness.</p>
            <p class="text-2">© 2020 All Rights Reserved</p>
        </div>
    </div>
</footer>
<!--/-->

<!--Scripts-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<script src="{{asset('assets/js/main-scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<!--/-->
</body>

</html>
