@extends('admin.layouts.head')
@section('PAGE START')
    <div  class="padding">
        <div class="box">
            <div class="box-header">
                <h2>Table with elements</h2>
            </div>
            <div class="col-xs-12">
                <a href="{{route('new-berita')}}" class="btn btn-outline b-primary text-primary">Tambah Berita</a>
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped b-t">
                    <thead>
                    <tr>
                        <th width="80%">Judul</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                        <tr>
{{--                            <td>{!! Str::word($data->judul, 7, '...') !!}</td>--}}
                            <td>{!! \Illuminate\Support\Str::substr($data->judul,0,60) !!}</td>
                            <td>
                                <a href="#" class=" btn btn-sm primary">Baca Selengkapnya</a>
                                <a href="{{route('edit-berita',$data->id)}}" class=" btn btn-sm warn">Edit</a>
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
                                        <p>{{__("Semua data akun ".$data->judul." akan dihapus!")}}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('hapus-berita',$data->id)}}">
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



