@php
$totalspendingall = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->sum('jumlah_anggaran');
@endphp

<div class="container-fluid">
    <div class="row">
    <a href="{{  url('/pengeluaran') }}" class="navbar-brand font-weight-bold text-uppercase text-base"><h5>TOTAL PENGELUARAN Rp. {{ number_format($totalspendingall,0,',','.') }}-,<span align="justify"></h5></a></span>
      </div>

    </div>
  </div>

