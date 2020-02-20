<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Unit','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan','Action'];
$no = 1;

//ambil master data
?>
<link rel="stylesheet" href="<?php echo e(asset('table/css/bootstraps.min.css')); ?>">
<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

            <div class="col-lg-12 mb-12">
                <div class="card-lg-12 mb-12">
                  <div class="card-header-lg-12 mb-12">
                      <br><br>
                    <h3 class="m-10 font-weight-bold text-primary">Data Aktivitas </h3>
                    <br>
                        <div class="sparkline20-list">
                            <div class="data-table-area-lg-12 mb-12">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" class="table card-text"  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                        <thead>
                                            <tr>

                                                <div class="bs-bars pull-left">
                                                <a href="<?php echo e(route('activity.create')); ?>"class="btn btn-primary btn-md">
                                                    Tambah
                                                </a>&nbsp;&nbsp;
                                                    <a href="<?php echo e(url('aktivitas-pdf')); ?>" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data Aktivitas
                                                      </a></div>

                                                        <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th><?php echo e($jdl); ?></th>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ar_aktivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($akt->nama_jenis_anggaran); ?></td>
                                                <td><?php echo e($akt->jenis_anggaran); ?></td>
                                                <td><?php echo e($akt->unt); ?></td>
                                                <td>Rp. <?php echo e(number_format($akt->jumlah_anggaran,0,',','.')); ?></td>
                                                <td><?php echo e($akt->peg); ?></td>
                                                <td><?php echo e($akt->tgl_aktivitas); ?></td>
                                                <td>
                                                    <?php if(!empty($akt->keterangan)): ?>
                                                        <img src="<?php echo e(asset('img')); ?>/<?php echo e($akt->keterangan); ?>" width="55px" height="55px">
                                                    <?php else: ?>
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                <form method="POST"
                                                    action="<?php echo e(route('activity.destroy',$akt->id)); ?>">
                                                            <div class="icon"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo e(route('activity.show',$akt->id)); ?>" >
                                                            <div class="icon bg-blue">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                        </a>&nbsp;
                                                        <a href="<?php echo e(route('activity.edit',$akt->id)); ?>"  class="">
                                                            <div class="icon bg-green">
                                                                <i class="fas  fa-pen"></i>
                                                            </div>
                                                        </a>&nbsp;
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                            class="btn-danger btn-circle btn-sm"
                                                            onclick="return confirm('Yakin diHapus?')">
                                                            <i class="fas fa-trash"></i>
                                                            </button>
                                                            </div>
                                                    </form>
                                                </td>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/aktivitas/index.blade.php ENDPATH**/ ?>