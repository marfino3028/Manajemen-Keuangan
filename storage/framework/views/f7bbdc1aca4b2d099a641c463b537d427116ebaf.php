<?php $__env->startSection('content'); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card shadow mb-10">
    <?php $__currentLoopData = $ar_profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
  <center> <h5 class="m-0 font-weight-bold text-primary"><?php echo e($prof->name); ?></h5></center>
    </div>
    <div class="card-body">
      <div class="text-center">
        <?php if(!empty($prof->foto)): ?>
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="<?php echo e(asset('img')); ?>/<?php echo e($prof->foto); ?>" />
        <?php else: ?>
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                 src="<?php echo e(asset('img/no-photo.jpg')); ?>" alt="">
        <?php endif; ?>
      </div>
      <div class="alert alert-dismissable alert-primary">
          Nama : <?php echo e($prof->name); ?> <br/>
          Jabatan : <?php echo e($prof->jabatan); ?> <br/>
          Email : <?php echo e($prof->email); ?> <br/>
          Dibuat pada : <?php echo e($prof->created_at); ?> <br/>
          Diubah pada : <?php echo e($prof->updated_at); ?>

      </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <center><a rel="nofollow" href="<?php echo e(url('/')); ?>" class="btn btn-primary btn-lg">Kembali</a></center>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TA2\resources\views/profile/show.blade.php ENDPATH**/ ?>