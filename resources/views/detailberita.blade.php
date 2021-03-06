<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title', 'Detail Berita')
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
    <span class="sidenav-close"></span>
</div>
<!--/-->
<!--Berita-->
<section class="section section-single-post section-single-post-1">
    <div class="display-spacing display-spacing-plus">
        <div class="container">
            <div class="row row-sm justify-content-md-center">
                <div class="col-12">
                    <div class="image image-large mb-0">
                        <img src="{{asset('storage/berita/'.$data->gambar)}}" alt="--Alternative for single post image--">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                    <div class="page-content page-content-1">
                        <div class="single-post">
                            <div class="el-panel-body">
                                <div class="details">
                                    <h1>{{__($data->judul)}}</h1>
                                    <p>{{__($data->deskripsi)}}</p>
                                    <div class="el-list-tags">
                                        <span>Tags:</span>
                                        <ul>
                                            <li>
                                                <a href="#">Business</a>
                                            </li>
                                            <li>
                                                <a href="#">Marketing</a>
                                            </li>
                                            <li>
                                                <a href="#">Corporate</a>
                                            </li>
                                        </ul>
                                    </div>
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
<!--Footer-->
<footer class="app-footer app-footer-1">
    <div class="footer-copyright">
        <div class="container">
            <p><span class="text-bold">WGFARM</span> organic and wellness.</p>
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
