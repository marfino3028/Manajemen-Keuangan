@extends('layouts.index')
@section('content')
@php
//array scalar
$ar_jenis = ['Pemasukan'=>'Pemasukan', 'Pengeluaran'=>'Pengeluaran'];
//ambil master data
$ar_aktivitas = App\Aktivitas::all();
$ar_pegawai = App\Pegawai::all();
$ar_jabatan = App\Jabatan::all();
$ar_unit = App\Unit::all();
@endphp

<style>
    .form{
        width:540px;
        height:770px;
        background:#e6e6e6;
        border-radius:10px;
        box-shadow:0 0 40px -10px #000;
        margin:calc(48vh - 420px) auto;
        padding:30px 30px;
        max-width:calc(100vw - 40px);
        box-sizing:border-box;
        font-family:'Montserrat',sans-serif;
        position:relative
      }
      h2{
        margin:5px 0;
        padding-bottom:5px;
        width:350px;
        color:#78788c;
        border-bottom:5px solid #78788c
      }
      input.inp{
        width:100%;
        padding:10px;
        box-sizing:border-box;
        background:none;
        outline:none;
        resize:none;
        border:0;
        font-family:'Montserrat',sans-serif;
        transition:all .3s;
        border-bottom:2px solid #bebed2
      }
      input:focus.inp{
        border-bottom:2px solid #78788c
      }
      textarea{
        width:100%;
        padding:10px;
        box-sizing:border-box;
        background:none;
        outline:none;
        resize:none;
        border:0;
        font-family:'Montserrat',sans-serif;
        transition:all .3s;
        border-bottom:2px solid #bebed2
      }
      textarea:focus{
        border-bottom:2px solid #78788c
      }
      p:before{content:attr(type);
        display:block;
        margin:3px 0 0;
        font-size:14px;
        color:#5a5a5a;
      }
      button{
        float:right;
        padding:8px 12px;
        margin:8px 0 0;
        font-family:'Montserrat',sans-serif;
        border:2px solid #78788c;
        background:0;
        color:#5a5a6e;
        cursor:pointer;
        transition:all .3s
      }
      button:hover{
        background:#78788c;
        color:#fff
      }

      </style>
      @foreach ($data as $edit)
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('activity.update',$edit->id)}}"
    enctype="multipart/form-data" class="form">
    @csrf
    @method('PUT')
    <h2>Edit Aktivitas</h2>

    <p type=" Nama Anggaran :">
        <input id="nama" name="nama" type="text"
        class="inp @error('nama') is-invalid @enderror" value="{{ $edit->nama_jenis_anggaran }}" />
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </input>
    </p>

    <p type=" Jenis Anggaran :">
        @php
        $no = 0;
        @endphp
        @foreach ($ar_jenis as $k => $v)
        @php
          $cek = ($edit->jenis_anggaran == $k ) ? 'checked' : '';
          @endphp
        <div class="form-check">
            <input class=" form-check-input" type="radio" name="ja"
                 value="{{ $k }}" {{ $cek }}/>
                 <label class="form-check-label">{{ $v }}</label>
  </div>
        @endforeach
    </p>

    <p type=" Unit :">
      <select name="unit" class="custom-select @error('unit') is-invalid @enderror">
        <option value="">-- Pilih Unit --</option>
        @foreach ($ar_unit as $unt)
            @php
            $sel = ($edit->unit_id == $unt['id']) ? 'selected' : '';
            @endphp
            <option value="{{ $unt['id'] }}" {{ $sel }} > {{ $unt['nama'] }} </option>
        @endforeach
      </select>

  @error('unit')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </p>


        <p type=" Jumlah Anggaran :">
        <input id="jumlah" name="jumlah" value="{{ $edit->jumlah_anggaran }}" type="text" class="inp @error('jumlah') is-invalid @enderror">
        @error('jumlah')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </p>


        <p type=" Tanggal Ativitas :">
        <input name="tanggal" type="datetime-local" class="inp @error('tanggal') is-invalid @enderror" value="{{ $edit->tgl_aktivitas }}" />
        @error('tanggal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </p>

    <p type=" Keterangan :">
      <input value="{{ $edit->keterangan }}" name="keterangan" type="file"
         class="inp @error('keterangan') is-invalid @enderror">
         @error('keterangan')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </p>

    <p type=" Pegawai :"><br>
      <select name="pegawai" class="custom-select @error('pegawai') is-invalid @enderror">
        <option value="">-- Pilih Pegawai --</option>
        @foreach ($ar_pegawai as $peg)
        @php
            $sel2 = ($edit->pegawai_id == $peg['id']) ? 'selected' : '';
            @endphp
        <option value="{{ $peg['id'] }}" {{ $sel2 }}> {{ $peg['nama'] }} </option>
        @endforeach
      </select>
      @error('pegawai')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </p>



  <button name="proses" type="submit" value="ubah">Ubah</button>

  </form>
  @endforeach
  @endsection
