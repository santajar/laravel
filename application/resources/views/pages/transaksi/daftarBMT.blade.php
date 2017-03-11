@extends('layout.master')

@section('title')
  <title>Daftar BMT</title>
@endsection

@section('headscript')
<link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3> Daftar BMT <small> </small> </h3>
  </div>
</div>
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List BMT</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="{{ route('daftar.bmtadd') }}"><button class="btn btn-success btn-sm">Tambah</button></a></li>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid">
          <thead>
            <tr>
              <th>No. Induk BMT</th>
              <th>Nama BMT</th>
              <th>Alamat</th>
              <th>No. Anggota BMT</th>
              <th>MPD</th>
              <th>MPW</th>
              <th>No. Telp</th>
              <th>Nama Kontak MBT</th>
              <th>No. Kontak MBT</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @for ($i=0; $i < 15; $i++)
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>Ubah</td>
          </tr>
          @endfor

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script type="text/javascript">
  $('#datatable').dataTable();
</script>
@endsection
