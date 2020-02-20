@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_pegawai = App\Pegawai::all();
$ar_jabatan = App\Jabatan::all();


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
  input{
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
  input:focus{
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form method="POST" action="{{route('pegawai.store')}}" enctype="multipart/form-data" class="form">
  @csrf
  <h2>Tambah Pegawai</h2>
  <p type=" Nama Pegawai :">
      <input id="nama" name="nama" type="text"
      class="@error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </input></p>

  <p type=" Jabatan :"><br>
      <select name="jabatan" class="custom-select @error('jabatan') is-invalid @enderror">
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($ar_jabatan as $jab)
        <option value="{{ $jab['id'] }}" @if (old('jabatan') == $jab['id']) selected @endif> {{ $jab['nama'] }} </option>
        @endforeach
      </select>
      @error('jabatan')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </p>

  <p type=" No Hp :">
      <input id="hp" name="hp" value="{{ old('hp') }}" type="text" class="@error('hp') is-invalid @enderror">
      @error('hp')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </input></p>

  <p type=" Alamat :">
      <input id="alamat" name="alamat" value="{{ old('alamat') }}" type="text" class="@error('alamat') is-invalid @enderror">
      @error('alamat')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </input></p>

  <p type=" Email :">
      <input id="email" name="email" value="{{ old('email') }}" type="text" class="@error('email') is-invalid @enderror">
      @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </input></p>
  <p type=" Foto :">
    <input value="{{  old('foto') }}" name="foto" type="file"
       class="form-control-file @error('foto') is-invalid @enderror">
       @error('foto')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
  </p>

  <button name="proses" type="submit" value="simpan">Simpan</button>
</form>
@endsection
