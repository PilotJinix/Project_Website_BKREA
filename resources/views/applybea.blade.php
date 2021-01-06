<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Orwell</title>
    @include('layouts.head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script>
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack ()", 0);
        window.onunload = function () {
            null
        };

    </script>
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
                        <h1>Form Pengajuan</h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                            <li>
                                <a href="home-1.html">
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <span class="text">Form Pengajuan</span>
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
<!--Checkout-->
<section class="section section-page section-checkout section-checkout-1">
    <div class="page-body">
        <div class="display-spacing">
            <form action="{{route('create-ajuan',$data->id)}}" class="form-3" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row row-sm">
                        <div class="col-lg-8">
                            <header class="el-heading el-heading-3">
                                <h2>Form Pengajuan</h2>
                                <div class="divider divider-line"></div>
                            </header>
                            <div class="row row-sm">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <label>Nama Lengkap*</label>
                                        <input type="text" class="mt-2 @error('nama_lengkap') is invalid @enderror"
                                               name="nama_pemohon" value="{{__($akun->nama_lengkap)}}" />
                                    </div>
                                    @error('nama_pemohon')
                                    <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{' $message '}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <label>Email*</label>
                                        <input type="text" class="mt-2 @error('email') is invalid @enderror"
                                               name="email" value="{{__($akun->email)}}" />

                                    </div>
                                    @error('email')
                                    <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{' $message '}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <label>Nomer HP*</label>
                                        <input type="number" class="mt-2 @error('no_hp') is invalid @enderror"
                                               name="no_hp" value="{{__($akun->nomer_hp)}}" />
                                    </div>
                                    @error('no_hp')
                                    <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{' $message '}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-item">
                                        <label>Upload data .rar</label>
                                        <div class="rounded" style="border: 1px solid #e1e1e1;padding: 13px;border-radius: 5px">
                                            <input type="file" class="@error('ktp') is fail @enderror"
                                                   style="cursor: pointer;border: none" name="data">
                                        </div>
                                        <label style="color: gray">(Max data = 10MB )</label>
                                    </div>
                                    @error('data')
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <header class="el-heading el-heading-3">
                                <h2>Beasiswa</h2>
                                <div class="divider divider-line"></div>
                            </header>
                            <div class="el-table-order el-table-order-1">
                                <ul>
                                    <li>
                                        <ul class="pl-0">
                                            <li class="p-3" style="border: 1px solid #e3e3e3; border-radius: 5px">
                                                <div
                                                    class="row row-0 d-flex align-items-center justify-content-between">
                                                    <img src="{{asset('storage/beasiswa/'.$data->gambar)}}"
                                                         alt="" width="70px">
                                                    <div class="pl-2 pt-1" style="width: 60%">
                                                        <label class="var">{{__($data->nama_beasiswa)}}</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <button id="button-submit" type="submit"
                                    class="button button-md button-block button-primary">
                                <span class="text">CHECKOUT</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
<!--Scripts-->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<script src="{{asset('assets/js/main-scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</body>

</html>
