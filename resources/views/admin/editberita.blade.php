@section('title', 'Berita')
@extends('admin.layouts.head')
@section('PAGE START')
    <div class="padding">
        <h3 class="_600 m-v-lg">Tambah Berita</h3>
        <form action="{{route('saveEdit', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-b-lg row">
                <div class="col-sm-10 col-sm-offset-2">
                    <div class="row row-sm">
                        <div class="col-sm-12">
                            <div class="md-form-group float-label">
                                <input type="text" class="md-input" name="judul_artikel" value="{{$data->judul}}" required>
                                <label>Judul</label>
                            </div>
                        </div>
                        @error('judul_artikel')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-sm-12">
                            <div class="md-form-group float-label">
                                <textarea class="md-input" rows="15" name="deskripsi" required>{!! $data->deskripsi !!}</textarea>
                                <label>Deskripsi</label>
                            </div>
                        </div>
                        @error('deskripsi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>
            </div>
            <a href="{{url()->previous()}}" class="btn white">Cancel</a>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
@endsection
