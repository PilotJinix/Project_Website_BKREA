<div class="sidenav-menu">
    <div class="sidenav-head">
        <span class="title">BKREA</span>
        <button class="button button-close-sidenav"></button>
    </div>
    <div class="sidenav-body">
        <div class="sidenav-body-inner">
            <ul class="menu">
                <li>
                    <a href="dashboard">
                        <span class="text">Beranda</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="text">List Beasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="text">Berita</span>
                    </a>
                </li>
                @guest
                @else
{{--                    @if ($akun->status == 'mitra')--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="text">Ajukan Produk Anda</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                @endguest
            </ul>
        </div>
    </div>
</div>
