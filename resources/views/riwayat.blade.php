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

<!--Berita-->
<section class="section section-faq section-faq-1">
    <div class="display-spacing display-spacing-plus">
        <div class="container">
            <div class="row row-sm">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="el-panel">
                        @foreach($data as $dataa)
                        <div class="el-panel-body">
                            <div class="el-panel-title">
                                <h3>{{__($dataa->nama_beasiswa)}}</h3>
                            </div>
                            <p>{{__($dataa->deskripsi)}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="items pt-15">
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="{{asset('assets/images/icons/click.svg')}}" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>Data Pemohon</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body" style="display: none;">
                                <h4>Nama Pemohon</h4>
                                <p>{{__($dataa->nama_pemohon)}}</p>
                                <br>
                                <h4>FeedBack</h4>
                                @if($dataa->feedback == 'Diterima')
                                    <p style="color: lawngreen">{{__($dataa->feedback)}}</p>
                                @else
                                    <p style="color: red">{{__($dataa->feedback)}}</p>
                                @endif
                            </div>
                        </div>
                        <!--/-->
                    </div>
                    @if($dataa->feedback == "Diterima" and $dataa->review == "belum")
                        <div>
                            <form action="{{route('review', $dataa->id)}}" method="post">
                                @csrf
                                <h4>Reviews</h4>
                                <textarea style="background-color: white" name="review" cols="150" rows="3"></textarea>
                                <button id="button-submit" type="submit"
                                        class="button button-md button-block button-primary">
                                    <span class="text">Beri Penilaian</span>
                                </button>
                            </form>
                        </div>
                    @endif
                </div>

                <!--Sidebar-->
                <aside class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                    <!--Widget-->
                    <div class="el-panel el-panel-teacher-info">
                        <div class="el-panel-body">
                            <div class="post-image">
                                <img src="{{asset('storage/beasiswa/'.$dataa->gambar)}}" alt="--Alternative--">
                                <a href="#" class="button button-read-more">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </aside>
                <!--/-->
            </div>
        </div>
    </div>
</section>
<!--/-->
<!--Footer-->

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
