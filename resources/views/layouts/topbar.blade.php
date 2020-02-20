@php
$pemasukan =DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
$pengeluaran = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->sum('jumlah_anggaran');
$sisasaldo = $pemasukan - $pengeluaran;
$ar_profile = App\User::all();
@endphp
<nav class="navbar navbar-expand-lg px-4 py-2 bg-dark shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="{{ url('/activity') }}" class="navbar-brand font-weight-bold text-uppercase text-base"><h5>Sisa Saldo : Rp. {{ number_format($sisasaldo,0,',','.') }}-,</h5></a>

    <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
      <li class="nav-item">
        <form id="searchForm" class="ml-auto d-none d-lg-block">
          <div class="form-group position-relative mb-0">


          </div>
        </form>
      </li>

          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{asset('img')}}/{{ Auth::user()->foto }}" alt="{{ Auth::user()->name }}" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
          @foreach ($ar_profile as $prof)
      <div aria-labelledby="userInfo" class="dropdown-menu"><a  href= "{{ route('settings.show',Auth::user()->id) }}"  class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">{{ Auth::user()->name }}</strong><small>{{ Auth::user()->jabatan }}</small></a>
           <div class="dropdown-divider"></div><a href="{{ route('settings.edit',Auth::user()->id) }}" class="dropdown-item">Edit Profile</a>
          <div class="dropdown-divider"></div><a href="{{  url('/logout') }}" class="dropdown-item"> {{ __('Logout') }}</a>

        </div>
        @endforeach
      </li>

    </ul>
  </nav>
