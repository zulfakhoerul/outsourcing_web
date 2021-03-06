@extends('outsourcing.layout.TampilanOutsourcing')
@section('content')


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Lamaran Jasa</h3>
                <p class="text-subtitle text-muted">Daftar Lamaran Jasa</p>
                <p>
                
                </p>
                <!-- <p>
                  Button trigger for Success theme modal
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Keterampilan">
                    Tambah Jasa
                  </button>
                  <br>
                </p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url ('outsourcing/DashboardOutsourcing')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Jasa</li>
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Nama Tenaga Kerja</th>
                <th>Jasa</th>
                <th>Status lamaran</th>
                <!-- <th>Bukti Transfer</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan Ke</th>
                <th>Status Pembayaran</th> -->
                <th>  </th>
              </tr>
            </thead>

            <tbody>
            @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->TenagaKerja->nama_tenagaKerja}}</td>
                        <td>{{$tampil->Jasa->nama_jasa}}</td>
                        <td>{{$tampil->status_lamaran}}</td>
                        <td>
                          <a href="/outsourcing/TerimaLamaran{{$tampil->id_lamaran}}" class="btn btn-warning" onclick="return confirm('Anda yakin?')">
                            Terima
                          </a>
                          <a href="/outsourcing/GagalLamaran{{$tampil->id_lamaran}}" class="btn btn-danger" onclick="return confirm('Anda yakin?')">
                            Tidak diterima
                          </a>
                        </td>
                      </tr>
                    </tbody>
                      @endforeach
          </table>
        </div>
      </div>
    </div>
</div>
@endsection