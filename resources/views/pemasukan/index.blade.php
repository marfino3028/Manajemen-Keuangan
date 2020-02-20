@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan','Action'];
$no = 1;
$pemasukan = DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
//ambil master data
@endphp
<link rel="stylesheet" href="{{ asset('table/css/bootstraps.min.css') }}">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

        <div class="col-lg-12 mb-12">
            <div class="card-lg-12 mb-12">
              <div class="card-header-lg-12 mb-12">

                  <div class="card-body">
                    <h3 class="m-10 font-weight-bold text-primary">Data Pemasukan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Rp.&nbsp;&nbsp;&nbsp;{{ number_format($pemasukan,0,',','.') }}-,</h5><br>

                      <div class="table-responsive">
                    <div class="sparkline20-list">
                        <div class="data-table-area-lg-12 mb-12">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                <table id="table" data-toggle="table" class="table  card-text "  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                    <thead>



                                            <tr>

                                                <div class="bs-bars pull-left">
                                                    <a href="{{ url('pemasukan-pdf') }}" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data Pemasukan
                                                      </a></div>

                                                        @foreach($ar_judul as $jdl)
                                                            <th>{{ $jdl }}</th>
                                                        @endforeach

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ar_pemasukan as $pemasukan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $pemasukan->nama_jenis_anggaran }}</td>
                                                <td>{{ $pemasukan->jenis_anggaran }}</td>
                                                <td>Rp. {{ number_format($pemasukan->jumlah_anggaran,0,',','.') }}</td>
                                                <td>{{ $pemasukan->peg }}</td>
                                                <td>{{ $pemasukan->tgl_aktivitas }}</td>
                                                <td>
                                                    @if(!empty($pemasukan->keterangan))
                                                        <img src="{{asset('img/bukti')}}/{{ $pemasukan->keterangan }}" width="70px" height="70px">
                                                    @else
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                <center><a href="{{ route('activity.show',$pemasukan->id) }}" >
                                                            <div class="icon bg-blue">
                                                                <i class="fas fa-eye"></i></div>
                                                        </a></center>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div></div>
@endsection
