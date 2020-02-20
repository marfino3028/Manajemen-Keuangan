<?php $__env->startSection('content'); ?>
<?php
//array scalar
$ar_jenis = ['Pemasukan'=>'Dana Masuk', 'Pengeluaran'=>'Dana Keluar'];
//ambil master data
$ar_aktivitas = App\Aktivitas::all();
$ar_pegawai = App\Pegawai::all();
$ar_jabatan = App\Jabatan::all();
$ar_unit = App\Unit::all();
?>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form method="POST" action="<?php echo e(route('activity.update',$edit->id)); ?>"
      enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Anggaran</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e($edit->nama_jenis_anggaran); ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Jenis Anggaran</label>
    <div class="col-8">
      <?php
      $no = 0;
      ?>
      <?php $__currentLoopData = $ar_jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $cek = ($edit->jenis_anggaran == $k ) ? 'checked' : '';
        ?>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ja"
               value="<?php echo e($k); ?>" <?php echo e($cek); ?>/>
        <label class="form-check-label"><?php echo e($v); ?></label>
      </div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4 col-form-label">Unit</label>
    <div class="col-8">
      <select name="unit" class="custom-select">
        <option value="">-- Pilih Unit --</option>
        <?php $__currentLoopData = $ar_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $sel = ($edit->unit_id == $unt['id']) ? 'selected' : '';
            ?>
            <option value="<?php echo e($unt['id']); ?>" <?php echo e($sel); ?> > <?php echo e($unt['nama']); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Jumlah Anggaran</label>
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text"
      class="form-control" value="<?php echo e($edit->jumlah_anggaran); ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4 col-form-label">Pegawai</label>
    <div class="col-8">
      <select name="pegawai" class="custom-select <?php $__errorArgs = ['pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <option value="">-- Pilih Pegawai --</option>
        <?php $__currentLoopData = $ar_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $sel2 = ($edit->pegawai_id == $peg['id']) ? 'selected' : '';
            ?>
        <option value="<?php echo e($peg['id']); ?>" <?php echo e($sel2); ?>> <?php echo e($peg['nama']); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Aktivitas</label>
    <div class="col-8">
      <input name="tanggal" type="datetime-local" class="form-control" value="<?php echo e($edit->tgl_aktivitas); ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Keterangan</label>
    <div class="col-8">
      <input value="<?php echo e($edit->keterangan); ?>" name="keterangan" type="file" class="form-control-file">
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-warning"
      value="ubah">Ubah</button>
    </div>
  </div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/aktivitas/form_edit.blade.php ENDPATH**/ ?>