<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title', 'List Beasiswa')
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
<header class="app-header app-header-1 boxed light">
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
<!--Shopping Cart-->
{{--<div class="app-shopping-cart app-shopping-cart-1">--}}
{{--    @include('layouts.cartlist')--}}
{{--</div>--}}
<!--/-->
<!--Banner-->
<section class="section section-clearfix-1">
    <header class="el-banner el-banner-1 overlay overlay-color">
        <span class="bg-color bg-primary"></span>
        <div class="display-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-right">
                        <h1>List Beasiswa</h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                            <li>
                                <a href="{{route('home')}}">
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <span class="text">List Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<!--/-->
<!--Products-->
<section class="section section-products section-blog-1">
    <div class="display-spacing" style="min-height: 80vh">
        <div class="container">
            <div class="row row-sm">
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
            </div>
            <div class="el-pagination text-center pt-space-half">
                {{--                {{$blog->links()}}--}}
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer class="app-footer app-footer-1" style="bottom: 0">
        <div class="footer-copyright">
            <div class="container">
                <p><span class="text-bold">BKREA</span> Beasiswa Kreativitas</p>
                <p class="text-2">BKREA © 2020 Muhammad Agung Santoso</p>
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
