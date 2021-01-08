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
            <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="{{asset('admin/assets/images/aa.jpg')}}" alt="...">
                    <i class="on b-white bottom"></i>
                    <!-- <a href="{{route('logout')}}">Logout</a> -->
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'">
                </div>
            </li>
        </ul>
        <!-- / navbar right -->
        <!-- navbar collapse -->
        <!-- / navbar collapse -->
    </div>
</div>
