@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Outsourcing</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Outsourcing</li>
            </ol>
          </div>
          <hr>

           @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-sign-out-alt"></i><b> Success!!</b></h6>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif

          <!-- DataTable with Hover -->
          <div class="col-lg-12">
            <div class="card mb-4">

              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5><strong>Data Outsourcing Menunggu di Validasi</strong></h5>
              </div>

              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Nama Outsourcing</th>
                      <th>No Ktp</th>
                      <th>Email</th>
                      <th>Aksi</th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    @php
                      $no=1;
                    @endphp
                    @foreach($nungguValidasi as $tampil)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$tampil->nama_outsourcing}}</td>
                      <td>{{$tampil->no_ktp}}</td>
                      <td>{{$tampil->email}}</td>
                      <td>
                        <a href="/admin/DetailOutsourcing{{$tampil->id_outsourcing}}" class="btn btn-info">
                          <i class="fas fa-eye"></i>&nbsp;Lihat Detail
                        </a>
                      </td>
                      <td>
                        <a href="/admin/HapusOutsourcing{{$tampil->id_outsourcing}}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                    @endforeach 
                </table>
              </div>
            </div>
          </div>

      <!---Container Fluid-->

                  
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5><strong>Semua Data Outsourcing</strong></h5>
                </div>

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Outsourcing</th>
                        <th>No Ktp</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->nama_outsourcing}}</td>
                        <td>{{$tampil->no_ktp}}</td>
                        <td>{{$tampil->email}}</td>
                        
                        <td>
                          
                          <a href="/admin/HapusOutsourcing{{$tampil->id_outsourcing}}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                      @endforeach 
                  </table>
                </div>
              </div>
            </div>

        <!---Container Fluid-->
@endsection