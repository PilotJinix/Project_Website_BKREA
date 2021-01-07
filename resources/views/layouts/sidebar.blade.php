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
                <li>
                    <a href="{{route('listbea')}}">
                        <span class="text">List Beasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('berita')}}">
                        <span class="text">Berita</span>
                    </a>
                </li>
                @guest
                @else
                    <li >
                        <a href="{{route('riwayat')}}">
                            <span class="text">Riwayat Permohonan</span>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</div>
