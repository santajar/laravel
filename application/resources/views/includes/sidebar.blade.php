<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"> <span>BMT Ta'awun</span></a>
    </div>

    <div class="clearfix"></div>

    <div class="profile">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2>John Doe</h2>
      </div>
    </div>

    <br />

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Administrator</h3>
        <ul class="nav side-menu">
          <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home <span class="label label-success pull-right">Coming Soon</span></a></li>
          <li><a><i class="fa fa-edit"></i> Menu Transaksi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('daftar.bmt') }}">Daftar BMT</a></li>
              <li><a href="#">Daftar Anggota</a></li>
              <li><a href="#">Daftar Peserta</a></li>
              <li><a href="#">Bayar Iuran</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-desktop"></i> Menu Informasi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Info Peserta</a></li>
              <li><a href="#">Info Tagihan</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-bar-chart-o"></i> Laporan </a></li>
          <li><a><i class="fa fa-table"></i> Properti <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Data BMT</a></li>
              <li><a href="#">Data Rekening</a></li>
              <li><a href="#">Data Anggota</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
  </div>
</div>
