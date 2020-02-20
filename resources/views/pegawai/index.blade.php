@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama Pegawai','Jabatan','Alamat','No HP','email','Foto','Action'];
$no = 1;
//ambil master data
@endphp

<link rel="stylesheet" href="{{ asset('table/css/bootstraps.min.css') }}">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

            <div class="col-lg-12 mb-12">
                <div class="card-lg-12 mb-12">
                  <div class="card-header-lg-12 mb-12">

                      <div class="card-body">
                        <h3 class="m-10 font-weight-bold text-primary">Data Pegawai</h5><br>

                          <div class="table-responsive">
                        <div class="sparkline20-list">
                            <div class="data-table-area-lg-12 mb-12">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" class="table card-text "  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                        <thead>



                                            <tr>

                                                <div class="bs-bars pull-left">
                                                <a href="{{ route('pegawai.create') }}"
                                                    class="btn btn-primary btn-md">
                                                    Tambah
                                                    </a>&nbsp;&nbsp;
                                                    <a href="{{ url('pegawai-pdf') }}" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data Pegawai
                                                      </a></div>

                                                        @foreach($ar_judul as $jdl)
                                                            <th>{{ $jdl }}</th>
                                                        @endforeach

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ar_pegawai as $peg)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $peg->nama }}</td>
                                                <td>{{ $peg->posisi }}</td>
                                                <td>{{ $peg->alamat }}</td>
                                                <td>{{ $peg->hp }}</td>
                                                <td>{{ $peg->email }}</td>
                                                <td>
                                                    @if(!empty($peg->foto))
                                                      <img src="{{asset('img')}}/{{ $peg->foto }}" width="70px" height="70px" />
                                                    @else
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                    action="{{ route('pegawai.destroy',$peg->id)}}">
                                                            <div class="icon"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="{{ route('pegawai.show',$peg->id) }}" >

                                                            <div class="icon bg-blue">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                        </a>&nbsp;
                                                        <a href="{{ route('pegawai.edit',$peg->id) }}"  class="">
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
        </div>
    </div>
@endsection
