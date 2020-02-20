<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan','Action'];
$no = 1;
$pengeluaran = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->Where('unit_id', '=', 2)->sum('jumlah_anggaran');
//ambil master data
?>
<link rel="stylesheet" href="<?php echo e(asset('table/css/bootstraps.min.css')); ?>">
<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Static Table Start -->

        <div class="col-lg-12 mb-12">
            <div class="card-lg-12 mb-12">
              <div class="card-header-lg-12 mb-12">

                  <div class="card-body">
                    <h3 class="m-10 font-weight-bold text-primary">Data SMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Rp.&nbsp;&nbsp;&nbsp;<?php echo e(number_format($pengeluaran,0,',','.')); ?>-,</h5><br>
                      <div class="table-responsive">
                    <div class="sparkline20-list">
                        <div class="data-table-area-lg-12 mb-12">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" class="table card-text"  data-search="true"   data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" data-pagination="true" >

                                    <thead>



                                            <tr>
                                                <div class="bs-bars pull-left">
                                                    <a href="<?php echo e(url('smp-pdf')); ?>" class="btn btn-success btn-md">
                                                        <i class="fas fa-file-pdf"></i>&nbsp;Data SMP
                                                      </a></div>

                                                        <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th><?php echo e($jdl); ?></th>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($smp->nama_jenis_anggaran); ?></td>
                                                <td><?php echo e($smp->jenis_anggaran); ?></td>
                                                <td>Rp. <?php echo e(number_format($smp->jumlah_anggaran,0,',','.')); ?></td>
                                                <td><?php echo e($smp->peg); ?></td>
                                                <td><?php echo e($smp->tgl_aktivitas); ?></td>
                                                <td>
                                                    <?php if(!empty($smp->keterangan)): ?>
                                                        <img src="<?php echo e(asset('img/bukti')); ?>/<?php echo e($smp->keterangan); ?>" width="70px" height="70px">
                                                    <?php else: ?>
                                                    <div class="icon text-black bg-violet">
                                                        <i class="fas fa-tired"></i>
                                                    </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <center><a href="<?php echo e(route('activity.show',$smp->id)); ?>" >
                                                            <div class="icon bg-blue">
                                                                <i class="fas fa-eye"></i></div>
                                                        </a></center>
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
            </div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TA\resources\views/smp/index.blade.php ENDPATH**/ ?>