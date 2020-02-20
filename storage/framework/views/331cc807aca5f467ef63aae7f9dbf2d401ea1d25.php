<?php
$totalspendingall = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->sum('jumlah_anggaran');
?>

<div class="container-fluid">
    <div class="row">
    <a href="<?php echo e(url('/pengeluaran')); ?>" class="navbar-brand font-weight-bold text-uppercase text-base"><h5>TOTAL PENGELUARAN Rp. <?php echo e(number_format($totalspendingall,0,',','.')); ?>-,<span align="justify"></h5></a></span>
      </div>

    </div>
  </div>

<?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/layouts/footer.blade.php ENDPATH**/ ?>