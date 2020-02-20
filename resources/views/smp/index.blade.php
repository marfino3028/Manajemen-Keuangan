@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan','Action'];
$no = 1;
$pengeluaran = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->Where('unit_id', '=', 2)->sum('jumlah_anggaran');
//ambil master data
@endphp
<link rel="stylesheet" href="{{ asset('table/css/bootstraps.min.css') }}">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

        <div class="col-lg-12 mb-12">
            <div class="card-lg-12 mb-12">
              <div class="card-header-lg-12 mb-12">

                  <div class="card-body">
                    <h3 class="m-10 font-weight-bold text-primary">Data SMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Rp.&nbsp;&nbsp;&nbsp;{{ number_format($pengeluaran,0,',','.') }}-,</h5><br>
                      <div class="table-responsive">
                    <div class="sparkline20-list">
                        <div class="data-table-area-lg-12 mb-12">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" class="table card-text"  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                    <thead>



                                            <tr>
                                                <div class="bs-bars pull-left">
                                                    <a href="{{ url('smp-pdf') }}" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data SMP
                                                      </a></div>

                                                        @foreach($ar_judul as $jdl)
                                                            <th>{{ $jdl }}</th>
                                                        @endforeach

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ar_smp as $smp)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $smp->nama_jenis_anggaran }}</td>
                                                <td>{{ $smp->jenis_anggaran }}</td>
                                                <td>Rp. {{ number_format($smp->jumlah_anggaran,0,',','.') }}</td>
                                                <td>{{ $smp->peg }}</td>
                                                <td>{{ $smp->tgl_aktivitas }}</td>
                                                <td>
                                                    @if(!empty($smp->keterangan))
                                                        <img src="{{asset('img/bukti')}}/{{ $smp->keterangan }}" width="70px" height="70px">
                                                    @else
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <center><a href="{{ route('activity.show',$smp->id) }}" >
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
