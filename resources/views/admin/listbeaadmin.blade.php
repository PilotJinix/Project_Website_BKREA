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
    <div ui-view class="app-body" id="view">
        <br><br><br>
        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="box">
                <div class="box-header">
                    <h3>Table with elements</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t">
                        <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{__($data->nama_lengkap)}}</td>
                            <td>{{__($data->email)}}</td>
                            <td>{{__('+62'.$data->nomer_hp)}}</td>
                            <td>{{__($data->alamat)}}</td>
                            <td>
                                <button class=" btn btn-sm rounded danger">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <ul class="pagination pagination-sm m-a-0">
                                <li><a href>Previous</a></li>
                                <li class="active"><a href>1</a></li>
                                <li><a href>2</a></li>
                                <li><a href>3</a></li>
                                <li><a href>4</a></li>
                                <li><a href>5</a></li>
                                <li><a href>Next</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>

                    </div>
                </footer>
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->

<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
</body>
</html>
