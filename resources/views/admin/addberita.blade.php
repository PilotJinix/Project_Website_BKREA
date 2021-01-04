@section('title', 'Dashboard')
@extends('admin.layouts.head')
@section('PAGE START')
    <div class="padding">
        <h3 class="_600 m-v-lg">Tambah Berita</h3>
        <form method="POST" href="{{route('tesadminnewsaveberita')}}" enctype="multipart/form-data">
            @csrf
            <div class="m-b-lg row">
                <div class="col-sm-10 col-sm-offset-2">
                    <div class="row row-sm">
                        <div class="col-sm-12">
                            <div class="md-form-group float-label">
                                <input class="md-input" name="judul_artikel" required>
                                <label>Judul</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="md-form-group">
                                <input type="file" class="md-input" name="gambar_artikel">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="md-form-group float-label">
                                <textarea class="md-input" rows="15" name="deskripsi"></textarea>
                                <label>Deskripsi</label>
                            </div>
                        </div>
                        <a href="{{url()->previous()}}" class="btn white">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
