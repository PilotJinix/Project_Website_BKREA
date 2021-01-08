<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Dashboard')
    <meta charset="utf-8" />
    <title>@yield('title') - BKREA</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset('admin/assets/images/logo.png')}}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset('admin/assets/images/logo.png')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('admin/assets/animate.css/animate.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/glyphicons/glyphicons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/styles/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/styles/font.css')}}" type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                <h5>Login</h5>
            </div>
            <form method="post" action="{{route('postlogin')}}">
                @csrf
                <div class="md-form-group float-label">
                    <input type="text" class="md-input" ng-model="user.email" name="username" required>
                    <label>Username</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" ng-model="user.password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
                <br>
                <h5>Default</h5>
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" ng-model="user.email" >
                    <label>admin</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" ng-model="user.email">
                    <label>12345678</label>
                </div>
            </form>
        </div>
    </div>

    <!-- ############ LAYOUT END-->

</div>

<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
<script src="{{asset('admin/assets/scripts/jquery-3.5.1.js')}}"></script>
<script src="{{asset('admin/assets/scripts/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>
