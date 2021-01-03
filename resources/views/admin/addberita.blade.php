@section('title', 'Dashboard')
@extends('admin.layouts.head')
@section('PAGE START')
    <div class="padding">
        <h3 class="_600 m-v-lg">Tambah Berita</h3>
        <div class="m-b-lg row">
            <div class="col-sm-10 col-sm-offset-2">
                <div class="row row-sm">
                    <div class="col-sm-12">
                        <div class="md-form-group float-label">
                            <input class="md-input" required>
                            <label>Judul</label>
                        </div>
                    </div>
{{--                    <div class="col-sm-12">--}}
{{--                        <div class="md-form-group float-label">--}}
{{--                            <input class="md-input" required>--}}
{{--                            <label>Last Name</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-sm-12">
                        <div class="md-form-group">
                            <input type="file" class="md-input">
                        </div>
                    </div>
                        <div class="col-sm-12">
                            <div class="md-form-group float-label">
                                <textarea class="md-input" rows="12"></textarea>
                                <label>Biography</label>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
