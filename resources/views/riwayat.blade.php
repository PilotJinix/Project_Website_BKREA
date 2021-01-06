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
                        <div class="el-panel-body">
                            <div class="el-panel-title">
                                <h3>Frequently Asked Questions</h3>
                            </div>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                    </div>
                    <div class="items pt-15">
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>How do I apply to teach on Eduline?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body" style="display: none;">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>Do I need teaching experience?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>Can I teach more than one language?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>How much can I expect to earn from private lessons?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>As a teacher, how do I receive payment?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                        <!--Accordion-->
                        <div class="el-accordion">
                            <div class="el-accordion-head">
                                <div class="inner d-flex align-items-center">
                                    <div class="accordion-image">
                                        <img src="assets/images/icons/click.svg" alt="Click me">
                                    </div>
                                    <div class="accordion-title">
                                        <h4>How much can I expect to earn from private lessons?</h4>
                                    </div>
                                    <div class="accordion-arrow">
                                        <div class="display-center">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="el-accordion-body">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            </div>
                        </div>
                        <!--/-->
                    </div>
                </div>
                <!--Sidebar-->
                <aside class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                    <!--Widget-->
                    <div class="el-panel el-panel-teacher-info">
                        <div class="el-panel-body">
                            <div class="post-image">
                                <img src="#" alt="--Alternative--">
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
