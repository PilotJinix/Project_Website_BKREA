@extends('admin.layouts.head')
@section('PAGE START')
    <div  class="padding">
        <div class="box">
            <div class="box-header">
                <h2>Table with elements</h2>
            </div>
            <div class="col-xs-12">
                <a href="{{route('new-beasiswa')}}" class="btn btn-outline b-primary text-primary">Tambah Beasiswa</a>
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped b-t">
                    <thead>
                    <tr>
                        <th>Nama Beasiswa</th>
                        <th>Kuota</th>
                        <th>Terakhir diubah</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                        <tr>
                            <td width="50%">{!! \Illuminate\Support\Str::substr($data->nama_beasiswa,0,60) !!}</td>
                            <td>{{__($data->kuota)}}</td>
                            <td>{{__($data->updated_at)}}</td>
                            <td>
                                <a href="#" class=" btn btn-sm primary">Baca Selengkapnya</a>
                                <a href="{{route('edit-beasiswa',$data->id)}}" class=" btn btn-sm warn">Edit</a>
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
                                        <p>{{__("Semua data akun ".$data->nama_beasiswa." akan dihapus!")}}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('deletebeasiwa',$data->id)}}">
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


