@section('title', 'Beasiswa')
@extends('admin.layouts.head')
@section('PAGE START')
    <div class="padding">
        <div class="row">
            <h3 class="title">Detail Pemohon</h3>
            @foreach($data as $data)
            <div class="col-sm-8 col-md-9">
                <div class="m-b" id="accordion">
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header p-y-sm">
                            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                                Data Beasiswa
                            </a>
                        </div>
                        <div id="c_1" class="collapse in">
                            <div class="box-body">
                                <div class="post-image">
                                    <img  src="{{asset('storage/beasiswa/'.$data->gambar)}}" alt="--Alternative--">
                                    {{--                            src="{{asset('storage/beasiswa/'.$dataa->gambar)}}--}}
                                    <a href="#" class="button button-read-more">
                                    </a>
                                </div>
                                <br>
                                <h4>Nama Beasiswa :</h4>
                                <p class="m-l-1">{{__($data->nama_beasiswa)}}</p>
                                <h4>Instansi :</h4>
                                <p class="m-l-1">{{__($data->nama_intansi)}}</p>
                                <h4>Kuota :</h4>
                                <p class="m-l-1">{{__($data->kuota)}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header p-y-sm">
                            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_2">
                                Data Pemohon
                            </a>
                        </div>
                        <div id="c_2" class="collapse">
                            <div class="box-body">
                                <div class="post-image">
                                    <img  src="{{asset('storage/beasiswa/'.$data->gambar)}}" alt="--Alternative--">
                                    {{--                            src="{{asset('storage/beasiswa/'.$dataa->gambar)}}--}}
                                    <a href="#" class="button button-read-more">
                                    </a>
                                </div>
                                <br>
                                <h4>Nama Pemohon :</h4>
                                <p class="m-l-1">{{__($data->nama_pemohon)}}</p>
                                <h4>Email Pemohon :</h4>
                                <p class="m-l-1">{{__($data->email_pemohon)}}</p>
                                <h4>Data Pemohon :</h4>
                                    <a class="m-l-1" type="input" href="{{route('download', $data->id)}}"  style="color: #0e76a8">{{__($data->data_pemohon)}}</a>
                                <p></p>
                                <h4>Dibuat :</h4>
                                <p class="m-l-1">{{__($data->created_at)}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('acc-Aajuan', $data->id)}}">
                    <button type="button" class="btn btn-primary">
                        Terima
                    </button>
                </a>
                <a href="{{route('reject-Aajuan', $data->id)}}" >
                    <button type="button" class="btn btn-danger">
                        Tolak
                    </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
