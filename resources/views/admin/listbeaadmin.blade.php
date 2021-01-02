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
        <div  class="padding">
            <div class="box">
                <div class="box-header">
                    <h3>Table with elements</h3>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped b-t">
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

                                <button class=" btn btn-sm rounded danger" data-toggle="modal" data-target={{__("#modal".$data->id)}}>
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id={{__('modal'.$data->id)}} tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Akun
                                        </h5>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p>{{__("Semua data akun ".$data->nama_lengkap." akan dihapus!")}}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('deleteakun',$data->id)}}">
                                            <button type="button" class="btn btn-info ">Konfirmasi</button>
                                        </a>
                                        <button type="button" class="btn btn-danger waves-effect"
                                                data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                <footer class="dker p-a">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-4 hidden-xs">--}}
{{--                            <ul class="pagination pagination-sm m-a-0">--}}
{{--                                <li><a href>Previous</a></li>--}}
{{--                                <li class="active"><a href>1</a></li>--}}
{{--                                <li><a href>2</a></li>--}}
{{--                                <li><a href>3</a></li>--}}
{{--                                <li><a href>4</a></li>--}}
{{--                                <li><a href>5</a></li>--}}
{{--                                <li><a href>Next</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-4 text-center">--}}
{{--                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </footer>--}}
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
