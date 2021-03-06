<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{url('assets/img/logo1.png')}}" alt="Logo" class="img-fluid"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('outsourcing/DashboardOutsourcing') ? "active" : "" }}">
                    <a href="{{('/outsourcing/DashboardOutsourcing')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Request::is('outsourcing/MengelolaJasa') ? "active" : "" }}">
                    <a href="{{('/outsourcing/MengelolaJasa')}}" class='sidebar-link'>
                        <i class="fas fa-list"></i>
                        <span>Data Jasa</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ Request::is('outsourcing/MengelolaTenagaKerja') ? "active" : "" }}">
                    <a href="{{('/outsourcing/MengelolaTenagaKerja')}}" class='sidebar-link'>
                        <i class="fas fa-building"></i>
                        <span>Data Tenaga Kerja</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-list"></i>
                        <span>Data Penyewaan</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item {{ Request::is('/outsourcing/DataPenyewaanPending') ? "active" : "" }}">
                            <a href="{{url ('/outsourcing/DataPenyewaanPending')}}">Pengajuan</a>
                        </li>
                        <li class="submenu-item {{ Request::is('/outsourcing/DataPenyewaanProgress') ? "active" : "" }}">
                            <a href="{{url ('/outsourcing/DataPenyewaanProgress')}}">In Progress</a>
                        </li>
                        <li class="submenu-item {{ Request::is('/outsourcing/DataPenyewaanFinish') ? "active" : "" }}">
                            <a href="{{url ('/outsourcing/DataPenyewaanFinish')}}">Finish</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ Request::is('/outsourcing/DataKomplain') ? "active" : "" }} ">
                    <a href="{{('/outsourcing/DataKomplain')}}" class='sidebar-link'>
                        <i class="fas fa-book"></i>
                        <span> Data Komplain</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-book"></i>
                        <span>Data Transaksi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item {{ Request::is('/outsourcing/TransaksiPerlengkapan') ? "active" : "" }}">
                            <a href="{{url ('/outsourcing/TransaksiPerlengkapan')}}">Perlengkapan</a>
                        </li>
                        <li class="submenu-item {{ Request::is('/outsourcing/TransaksiTenagaKerja') ? "active" : "" }}">
                            <a href="{{url ('/outsourcing/TransaksiTenagaKerja')}}">Tenaga Kerja</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Request::is('/outsourcing/MengelolaLamaran') ? "active" : "" }} ">
                    <a href="{{('/outsourcing/MengelolaLamaran')}}" class='sidebar-link'>
                        <i class="fas fa-book"></i>
                        <span> Lamaran Jasa</span>
                    </a>
                </li>
            </ul>

        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
