@extends('layouts.index')
@section('content')
@php
//ambil master data
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<form method="POST" action="{{route('pegawai.update',$edit->id)}}"
      enctype="multipart/form-data" class="form">
      <h2>Edit Pegawai</h2>
  @csrf
  @method('PUT')
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <p type=" Nama Pegawai :">
      <input id="nama" name="nama" type="text" value="{{ $edit->nama }}"></input></p>


<p type=" Jabatan :"><br>
<select name="jabatan" class="custom-select">
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($ar_jabatan as $jab)
            @php
            $sel2 = ($edit->jabatan_id == $jab['id']) ? 'selected' : '';
            @endphp
            <option value="{{ $jab['id'] }}" {{ $sel2 }} > {{ $jab['nama'] }} </option>
        @endforeach
      </select>
    </p>

<p type=" Alamat :">
<textarea id="alamat" name="alamat" cols="40" rows="5">{{ $edit->alamat }} </textarea>

<p type=" No Hp :">
      <input id="hp" name="hp" value="{{ $edit->hp }}" type="text"></input></p>


      <p type=" Email :">
      <input name="email" value="{{ $edit->email }}" type="email">
      </input></p>


      <p type=" Foto :">
      <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
      </input></p>


      <button name="proses" type="submit" value="ubah">Ubah</button>

</form>
@endforeach
@endsection
