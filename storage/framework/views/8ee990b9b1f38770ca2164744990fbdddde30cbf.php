<?php $__env->startSection('content'); ?>
<style>
     #my_image {width: 200px; margin: 20px; cursor: zoom-in;}
      #my_image:hover {opacity: 0.7;}
      #appear_image_div {width: 100%; height: 100%; position: absolute; z-index: 10; opacity: 0.7; background: #002447;}
      #appear_image {display: block; margin: auto; position: relative; z-index: 11; top: 20px;}
      #close_image {position: fixed; z-index: 12; top: 20px; right: 20px; cursor: pointer;
      font-family: sans-serif; color: #fff; font-size: 15pt;}
      #close_image:hover{opacity: 0.7;}
    </style>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card shadow mb-10">

    <?php $__currentLoopData = $ar_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
  <center>  <h5 class="m-0 font-weight-bold text-primary"><?php echo e($peg->nama); ?></h5></center>
    </div>
    <div class="card-body">



      <div class="text-center">

        <?php if(!empty($peg->foto)): ?>
            <img id="my_image" class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="<?php echo e(asset('img')); ?>/<?php echo e($peg->foto); ?>" />
        <?php else: ?>
            <img  id="my_image" class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="<?php echo e(asset('img/no-photo.jpg')); ?>" alt="">
        <?php endif; ?>
      </div>





      <div class="alert alert-dismissable alert-primary">
        Nama      : <?php echo e($peg->nama); ?> <br/>
        Jabatan   : <?php echo e($peg->posisi); ?> <br/>
        Alamat    : <?php echo e($peg->alamat); ?> <br/>
        No. HP    : <?php echo e($peg->hp); ?> <br/>
        Email     : <?php echo e($peg->email); ?> <br/>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <center>  <a rel="nofollow" href="<?php echo e(url('/pegawai')); ?>" class="btn btn-primary btn-lg">Kembali</a></center>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TA2\resources\views/pegawai/show.blade.php ENDPATH**/ ?>