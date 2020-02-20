<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama Pengurus','Jabatan','No HP','email','Foto','Action'];
$no = 1;
//ambil master data
?>
<link rel="stylesheet" href="<?php echo e(asset('table/css/bootstraps.min.css')); ?>">
<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

        <div class="col-lg-12 mb-12">
            <div class="card-lg-12 mb-12">
              <div class="card-header-lg-12 mb-12">

                  <div class="card-body">
                    <h3 class="m-10 font-weight-bold text-primary">Data Pengurus</h5><br>

                      <div class="table-responsive">
                    <div class="sparkline20-list">
                        <div class="data-table-area-lg-12 mb-12">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" class="table card-text"  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                    <thead>



                                            <tr>

                                                <div class="bs-bars pull-left">
                                                <a href="<?php echo e(route('pengurus.create')); ?>"
                                                    class="btn btn-primary btn-md">
                                                    Tambah
                                                    </a>&nbsp;&nbsp;
                                                    <a href="<?php echo e(url('pengurus-pdf')); ?>" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data Pengurus
                                                      </a></div>

                                                        <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th><?php echo e($jdl); ?></th>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ar_pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($peng->nama); ?></td>
                                                <td><?php echo e($peng->posisi); ?></td>
                                                <td><?php echo e($peng->hp); ?></td>
                                                <td><?php echo e($peng->email); ?></td>
                                                <td>
                                                    <?php if(!empty($peng->foto)): ?>
                                                      <img src="<?php echo e(asset('img')); ?>/<?php echo e($peng->foto); ?>" width="70px" height="70px" />
                                                    <?php else: ?>
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <form method="POST" action="<?php echo e(route('pengurus.destroy',$peng->id)); ?>" >
                                            <div class="icon"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo e(route('pengurus.show',$peng->id)); ?>" >

                                            <div class="icon bg-blue">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </a>&nbsp;
                                        <a href="<?php echo e(route('pengurus.edit',$peng->id)); ?>"  class="">
                                            <div class="icon bg-green">
                                                <i class="fas  fa-pen"></i>
                                            </div>
                                        </a>&nbsp;  <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                        class="btn-danger btn-circle btn-sm"
                                        onclick="return confirm('Yakin diHapus?')">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                        </div>
                                    </form>
                                </td>


                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TA\resources\views/pengurus/index.blade.php ENDPATH**/ ?>