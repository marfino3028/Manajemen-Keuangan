<?php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran'];
$no = 1;
$pemasukanzz = DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
?>
<?php $__currentLoopData = $ar_pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemasukan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!DOCTYPE html>
<!--
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Total Pemasukan</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

    <link rel="stylesheet" href="css/template.css">
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="logo">
          <img data-logo="<?php echo e(asset('img')); ?>/<?php echo e($pemasukan->keterangan); ?>" />
        </div>

        <div class="company-info">
          <div>Pesantren Turzina</div>

          <br />

          <span>Jl Joglo</span>
          <br />
        </div>

      </section>

      <section id="invoice-title-number">

        <span id="title">Pemasukan</span>

      </section>

      <div class="clearfix"></div>

      <section id="client-info">
        <span><?php echo e($pemasukan->unt); ?></span>
        <div>
          <span class="bold"><?php echo e($pemasukan->peg); ?></span>
        </div>

      </section>

      <div class="clearfix"></div>

      <section id="items">

        <table cellpadding="0" cellspacing="0">

            <tr>
                <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($jdl); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>

            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($pemasukan->nama_jenis_anggaran); ?></td>
                <td><?php echo e($pemasukan->jenis_anggaran); ?></td>
                <td>Rp. <?php echo e(number_format($pemasukan->jumlah_anggaran,0,',','.')); ?></td>


            </tr>

        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </section>

      <section id="sums">

        <table cellpadding="0" cellspacing="0">

          <tr data-hide-on-quote="true">
            <th>Total</th>
            <td><?php echo e(number_format($pemasukanzz,0,',','.')); ?></td>
          </tr>

        </table>

        <div class="clearfix"></div>

      </section>

      <div class="clearfix"></div>

      <section id="invoice-info">
        <div>
          <span>date</span> <span><?php echo e($pemasukan->tgl_aktivitas); ?></span>
        </div>
        <div>
          <span>Currency</span> <span>IDR</span>
        </div>
      </section>

      <div class="clearfix"></div>

      <div class="thank-you">Thanks</div>

      <div class="clearfix"></div>
    </div>

    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\TA2\resources\views/pemasukan/pemasukanPDF.blade.php ENDPATH**/ ?>