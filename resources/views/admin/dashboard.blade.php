@section('title', 'Dashboard')
@extends('admin.layouts.head')
@section('PAGE START')
        <div class="padding ">
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
                                    <div class="text-muted">Pengguna</div>
                                    <h4 class="m-a-0 text-md _600">{!!$data_user!!}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Beasiswa</div>
                                    <h4 class="m-a-0 text-md _600">{!! $data_beasiswa !!}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Permohonan</div>
                                    <h4 class="m-a-0 text-md _600">{!! $data_pemohon !!}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box p-a">
                                <div class="clear">
                                    <div class="text-muted">Berita</div>
                                    <h4 class="m-a-0 text-md _600">{!! $data_berita !!}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-8">
                    <div class="row-col box dark bg">
                        <div class="col-sm-8 dker" style="height: 162px">
                            <div class="box-header">
                                <h3>Tambah Beasiswa</h3>
                            </div>
                            <div class="box-body">
                                <p class="text-muted">Tambah Beasiswa dengan mudah</p>
                                <a href="{{route('homeadmin')}}" class="btn btn-sm btn-outline rounded b-success">Tambah Beasiswa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h2>Daftar Akun User</h2>
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

                                    <button class=" btn btn-sm danger" data-toggle="modal" data-target={{__("#modal".$data->id)}}>
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
@endsection

