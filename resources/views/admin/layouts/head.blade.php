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
<!--Preloader-->

@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@include('admin.layouts.theme')

<!--EndPreloader-->

<!--Content-->

<div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
        <br><br><br>
        <!-- ############ PAGE START-->
        <section>
            @yield('PAGE START')
        </section>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->

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



