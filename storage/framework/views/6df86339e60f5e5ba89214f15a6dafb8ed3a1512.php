<h3 align="center">Data Pegawai Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
        <?php
        $ar_judul = ['No','Nama Pengurus','Jabatan','No HP','email','Foto','Action'];
        $no = 1;
      ?>
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
              <center>
              <?php if(!empty($peng->foto)): ?>
                  <img src="img/<?php echo e($peng->foto); ?>"  />
              <?php else: ?>
                  <img src="img/no-photo.jpg" />
              <?php endif; ?>
              </center>
            </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

  </table>
<?php /**PATH C:\xampp\htdocs\TA2\resources\views/pengurus/pengurusPDF.blade.php ENDPATH**/ ?>