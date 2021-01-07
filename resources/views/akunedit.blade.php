<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    @section('title','Edit Profile')
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body style="background-color: #eeeeee">
<!--Preloader-->
<div id="preloader" class="preloader">
    <div class="preloader-inner">
        <div class="preloader-6">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<header class="app-header app-header-1 bg-dark">
    <div class="container">
        <a href="{{route('selftakun')}}"><span class="text-light p-1">&laquo; Back</span></a>
    </div>
</header>
<!--Auth-->
<section class="section section-auth section-auth-login">
    <div class="display-spacing">
        <div class="container">
            <div class="row">
                @if (session()->has('successUpdate'))
                    <div id="message" class="w-100 position-absolute" style="z-index: 5;margin-top: -2.5rem;left:40%">
                        <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center justify-content-center"
                             style="border-radius: 5px">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <span class="ml-2">{{session()->get('successUpdate')}}</span>
                        </div>
                    </div>
                @endif
                <div class="card w-100">
                    <div class="card-header text-center">
                        <span>Data Akun</span>
                    </div>
                    <div class="card-body">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 text-center">
                                    <div class="card card-shadow border-0 rounded bg-secondary w-100">
                                        <a id="foto" href="#" class="text-center"><img
                                                src="{{asset('assets/images/people/blank-profile.webp')}}"
                                                class="card-img-top w-auto" alt="__FOTO__"></a>
                                        <div class="card-body bg-primary rounded">
                                            <h5 class="card-title text-center h5 text-light">nama lengakap
                                            </h5>
                                        </div>
                                    </div>
                                    <button id="editPassword" class="btn btn-primary mt-2 w-100">Edit
                                        Password</button>
                                </div>
                                <div class="col-sm pt-1">
                                    <h5 class="h5 font-weight-bold">Ubah Data Diri</h5>
                                    <form method="POST" class="mt-3 form-1" action="{{route('edit-akun-save')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input
                                                    class="form-control @error('nama_lengkap') is invail @enderror"
                                                    type="text" name="nama_lengkap" value="{{$akun->nama_lengkap}}">
                                                @error('nama_lengkap')
                                                <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('username') is invail @enderror"
                                                       type="text" name="username" value="{{$akun->username}}">
                                                @error('username')
                                                <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('email') is invail @enderror"
                                                       type="email" name="email" value="{{$akun->email}}">
                                                @error('email')
                                                <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label>Nomer HP</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-item">
                                                    <input
                                                        class="input-icon pt-2 pb-2 @error('nomer_hp') is invail @enderror"
                                                        type="number" name="nomer_hp" value="{{$akun->nomer_hp}}">
                                                    <div class="icon mb-1 ml-3">
                                                        <span>+62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('nomer_hp')
                                            <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('alamat') is invail @enderror"
                                                       type="text" name="alamat" value="{{$akun->alamat}}">
                                                @error('alamat')
                                                <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input class="float-right button-primary rounded pl-5 pr-5 p-2"
                                               type="submit" value="Simpan">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->
<!--Footer-->
<!--/-->
<div id="modalEditPassword" class="pos-fixed" style="display: none">
    <div class="option w-50">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div></div>
                <span class="text-bold mb-0">Ganti Password</span>
                <i id="closeModalEditPassword" class="fa fa-times" aria-hidden="true" style="cursor: pointer"></i>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Lama</label>
                        <input type="password" name="password_lama"
                               class="form-control @error('password_lama') is invalid @enderror">
                        @error('password_lama')
                        <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is invalid @enderror">
                        @error('password')
                        <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation"
                               class="form-control @error('password_confirmation') is not match @enderror">
                        @error('password_confirmation')
                        <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary btn w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="modalEditFoto" class="pos-fixed" style="display: none">
    <div class="option w-50">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div></div>
                <span class="text-bold mb-0">Ganti Foto Profil</span>
                <i id="closeModalEditFoto" class="fa fa-times" aria-hidden="true" style="cursor: pointer"></i>
            </div>
        </div>
    </div>
</div>
<!--Scripts-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<script src="{{asset('assets/js/main-scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#notifFoto').fadeOut();
            $("#message").fadeOut(3000);
        }, 3000);
        $('#editPassword').click(function () {
            $('#modalEditPassword').fadeIn();
        })
        $('#editFoto').click(function () {
            $('#modalEditFoto').fadeIn();
        })
        $('#closeModalEditPassword').click(function () {
            $('#modalEditPassword').fadeOut();
        })
        $('#closeModalEditFoto').click(function () {
            $('#modalEditFoto').fadeOut();
        })
        $('#foto').hover(function () {
            $('#hoverEditFoto').addClass('d-flex');
        })
        $('#hoverEditFoto').mouseleave(function () {
            $('#hoverEditFoto').removeClass('d-flex');
        })
        $('#editFoto').click(function () {
            $('#modalEditFoto').fadeIn();
        })
        $('#closeModalEditFoto').click(function () {
            $('#modalEditFoto').fadeOut();
        })
    })

</script>
<!--/-->
</body>

</html>
