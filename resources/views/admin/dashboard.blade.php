<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Dashboard')
    @include('admin.layouts.head')
</head>
<body>
<!--Preloader-->
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@include('admin.layouts.theme')
<!--EndPreloader-->

<!--Content-->

<div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow navbar-md">
        <div class="navbar">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
                <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar right -->
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" href data-toggle="dropdown">
                        <i class="material-icons">&#xe7f5;</i>
                        <span class="label label-sm up warn">3</span>
                    </a>
                    <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="{{asset('admin/assets/images/aa.jpg')}}" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                    </a>
                    <div ui-include="'../views/blocks/dropdown.user.html'"></div>
                </li>
                <li class="nav-item hidden-md-up">
                    <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                        <i class="material-icons">&#xe5d4;</i>
                    </a>
                </li>
            </ul>
            <!-- / navbar right -->

            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="collapse">
                <div ui-include="'../views/blocks/navbar.form.right.html'"></div>
                <!-- link and dropdown -->
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href data-toggle="dropdown">
                            <span>Beasiwa Kreativ</span>
                        </a>
                        <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                    </li>
                </ul>
                <!-- / -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
    <div class="app-footer">
        <div class="p-a text-xs">
            <div class="pull-right text-muted">
                &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
                <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
            </div>
            <div class="nav">
                <a class="nav-link" href="http://flatfull.com/themes/flatkit/">About</a>
                <span class="text-muted">-</span>
                <a class="nav-link label accent" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
            </div>
        </div>
    </div>
    <div ui-view class="app-body" id="view">

        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="margin">
                <h5 class="m-b-0 _300">Hi Jone, Welcome back</h5>
                <small class="text-muted">Awesome uikit for your next project</small>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-4">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Likes</div>
                                    <h4 class="m-a-0 text-md _600"><a href>7530</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Comments</div>
                                    <h4 class="m-a-0 text-md _600"><a href>2980</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Photos</div>
                                    <h4 class="m-a-0 text-md _600"><a href>630</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Videos</div>
                                    <h4 class="m-a-0 text-md _600"><a href>750</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-8">
                    <div class="row-col box dark bg">
                        <div class="col-sm-8 dker" style="height: 162px">
                            <div class="box-header">
                                <h3>Reports</h3>
                            </div>
                            <div class="box-body">
                                <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                <a href class="btn btn-sm btn-outline rounded b-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->

<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
</body>
</html>
