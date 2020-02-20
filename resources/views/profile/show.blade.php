@extends('layouts.index')
@section('content')
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card shadow mb-10">
    @foreach ($ar_profile as $prof)
    <div class="card-header py-3">
  <center> <h5 class="m-0 font-weight-bold text-primary">{{ $prof->name }}</h5></center>
    </div>
    <div class="card-body">
      <div class="text-center">
        @if(!empty($prof->foto))
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="{{asset('img')}}/{{ $prof->foto }}" />
        @else
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="{{asset('img/no-photo.jpg')}}" alt="">
        @endif
      </div>
      <div class="alert alert-dismissable alert-primary">
          Nama : {{ $prof->name }} <br/>
          Jabatan : {{ $prof->jabatan }} <br/>
          Email : {{ $prof->email }} <br/>
          Dibuat pada : {{ $prof->created_at }} <br/>
          Diubah pada : {{ $prof->updated_at }}
      </div>
      
      @endforeach
      <center><a rel="nofollow" href="{{ url('/') }}" class="btn btn-primary btn-lg">Kembali</a></center>
    </div>
    </div>
@endsection
