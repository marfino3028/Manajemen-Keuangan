<h3 align="center">Data Pegawai Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      <?php
       $ar_judul = ['No','Nama Pegawai','Jabatan','Alamat','No HP','email','Foto','Action'];
        $no = 1;
      ?>
      <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <th><?php echo e($jdl); ?></th>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ar_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($peg->nama); ?></td>
          <td><?php echo e($peg->posisi); ?></td>
          <td><?php echo e($peg->alamat); ?></td>
          <td><?php echo e($peg->hp); ?></td>
          <td><?php echo e($peg->email); ?></td>
          <td>
            <center>
            <?php if(!empty($peg->foto)): ?>
                <img src="img/<?php echo e($peg->foto); ?>"  />
            <?php else: ?>
                <img src="img/no-photo.jpg" />
            <?php endif; ?>
            </center>
          </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php /**PATH C:\xampp\htdocs\TA\resources\views/pegawai/pegawaiPDF.blade.php ENDPATH**/ ?>