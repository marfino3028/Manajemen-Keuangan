<h3 align="center">Data Pegawai Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
        <?php
        $ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran','Pegawai','Tanggal Aktivitas','Keterangan'];
        $no = 1;
      ?>
      <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <th><?php echo e($jdl); ?></th>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ar_pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemasukan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($no++); ?></td>
        <td><?php echo e($pemasukan->nama_jenis_anggaran); ?></td>
        <td><?php echo e($pemasukan->jenis_anggaran); ?></td>
        <td>Rp. <?php echo e(number_format($pemasukan->jumlah_anggaran,0,',','.')); ?></td>
        <td><?php echo e($pemasukan->peg); ?></td>
        <td><?php echo e($pemasukan->tgl_aktivitas); ?></td>
          <td>
            <center>
            <?php if(!empty($pemasukan->foto)): ?>
                <img src="img/<?php echo e($pemasukan->foto); ?>"  />
            <?php else: ?>
                <img src="img/no-photo.jpg" />
            <?php endif; ?>
            </center>
          </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/pemasukan/pemasukanPDF.blade.php ENDPATH**/ ?>