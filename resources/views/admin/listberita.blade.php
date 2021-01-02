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
                    <h2>Table with elements</h2>
                </div>
                <div class="col-xs-12">
                    <button class="btn btn-outline b-primary text-primary" href="">Tambah Beasiswa</button>
                </div>

                <div class="table-responsive">
                    <table id="berita" class="table table-striped b-t">
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
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->
<script>
    $(document).ready(function() {
        $('#berita').DataTable();
    } );
</script>
<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
<script href="{{asset('admin/assets/scripts/jquery-3.5.1.js')}}"></script>
<script href="{{asset('admin/assets/scripts/jquery.dataTables.min.js')}}"></script>
<script href="{{asset('admin/assets/scripts/dataTables.bootstrap4.min.js')}}"></script>
</body>
</html>
