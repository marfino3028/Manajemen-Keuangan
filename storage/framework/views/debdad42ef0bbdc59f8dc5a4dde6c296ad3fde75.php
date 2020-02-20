<?php
$pemasukan =DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
$pengeluaran = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->sum('jumlah_anggaran');
$sisasaldo = $pemasukan - $pengeluaran;
$ar_profile = App\User::all();
?>
<nav class="navbar navbar-expand-lg px-4 py-2 bg-dark shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="<?php echo e(url('/activity')); ?>" class="navbar-brand font-weight-bold text-uppercase text-base"><h5>Sisa Saldo : Rp. <?php echo e(number_format($sisasaldo,0,',','.')); ?>-,</h5></a>

    <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
      <li class="nav-item">
        <form id="searchForm" class="ml-auto d-none d-lg-block">
          <div class="form-group position-relative mb-0">


          </div>
        </form>
      </li>

          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="<?php echo e(asset('img')); ?>/<?php echo e(Auth::user()->foto); ?>" alt="<?php echo e(Auth::user()->name); ?>" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
          <?php $__currentLoopData = $ar_profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div aria-labelledby="userInfo" class="dropdown-menu"><a  href= "<?php echo e(route('settings.show',Auth::user()->id)); ?>"  class="dropdown-item"><strong class="d-block text-uppercase headings-font-family"><?php echo e(Auth::user()->name); ?></strong><small><?php echo e(Auth::user()->jabatan); ?></small></a>
           <div class="dropdown-divider"></div><a href="<?php echo e(route('settings.edit',Auth::user()->id)); ?>" class="dropdown-item">Edit Profile</a>
          <div class="dropdown-divider"></div><a href="<?php echo e(url('/logout')); ?>" class="dropdown-item"> <?php echo e(__('Logout')); ?></a>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </li>

    </ul>
  </nav>
<?php /**PATH C:\xampp\htdocs\TA\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>