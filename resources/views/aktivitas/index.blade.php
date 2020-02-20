@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Unit','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan','Action'];
$no = 1;

//ambil master data
@endphp

<link rel="stylesheet" href="{{ asset('table/css/bootstraps.min.css') }}">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

            <div class="col-lg-12 mb-12">
                <div class="card-lg-12 mb-12">
                  <div class="card-header-lg-12 mb-12">
                      <br><br>
                    <h3 class="m-10 font-weight-bold text-primary">Data Aktivitas </h3>
                    <br>
                        <div class="sparkline20-list">
                            <div class="data-table-area-lg-12 mb-12">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" class="table card-text"  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                        <thead>
                                            <tr>

                                                <div class="bs-bars pull-left">
                                                <a href="{{ route('activity.create') }}"class="btn btn-primary btn-md">
                                                    Tambah
                                                </a>&nbsp;&nbsp;
                                                    <a href="{{ url('aktivitas-pdf') }}" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data Aktivitas
                                                      </a></div>

                                                        @foreach($ar_judul as $jdl)
                                                            <th>{{ $jdl }}</th>
                                                        @endforeach

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ar_aktivitas as $akt)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $akt->nama_jenis_anggaran }}</td>
                                                <td>{{ $akt->jenis_anggaran }}</td>
                                                <td>{{ $akt->unt }}</td>
                                                <td>Rp. {{ number_format($akt->jumlah_anggaran,0,',','.') }}</td>
                                                <td>{{ $akt->peg }}</td>
                                                <td>{{ $akt->tgl_aktivitas }}</td>
                                                <td>
                                                    @if(!empty($akt->keterangan))
                                                        <img src="{{asset('img/bukti')}}/{{ $akt->keterangan }}" width="55px" height="55px">
                                                    @else
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                <form method="POST"
                                                    action="{{ route('activity.destroy',$akt->id)}}">
                                                            <div class="icon"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="{{ route('activity.show',$akt->id) }}" >
                                                            <div class="icon bg-blue">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                        </a>&nbsp;
                                                        <a href="{{ route('activity.edit',$akt->id) }}"  class="">
                                                            <div class="icon bg-green">
                                                                <i class="fas  fa-pen"></i>
                                                            </div>
                                                        </a>&nbsp;
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                            class="btn-danger btn-circle btn-sm"
                                                            onclick="return confirm('Yakin diHapus?')">
                                                            <i class="fas fa-trash"></i>
                                                            </button>
                                                            </div>
                                                    </form>
                                                </td>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
