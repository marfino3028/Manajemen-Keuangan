<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_jabatan = App\Jabatan::all();
$ar_profile = App\User::all();
?>
<style>

.form{
    width:540px;
    height:770px;
    background:#e6e6e6;
    border-radius:10px;
    box-shadow:0 0 40px -10px #000;
    margin:calc(48vh - 420px) auto;
    padding:30px 30px;
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
    position:relative
  }
  h2{
    margin:5px 0;
    padding-bottom:5px;
    width:350px;
    color:#78788c;
    border-bottom:5px solid #78788c
  }
  input{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    background:none;
    outline:none;
    resize:none;
    border:0;
    font-family:'Montserrat',sans-serif;
    transition:all .3s;
    border-bottom:2px solid #bebed2
  }
  input:focus{
    border-bottom:2px solid #78788c
  }
  textarea{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    background:none;
    outline:none;
    resize:none;
    border:0;
    font-family:'Montserrat',sans-serif;
    transition:all .3s;
    border-bottom:2px solid #bebed2
  }
  textarea:focus{
    border-bottom:2px solid #78788c
  }
  p:before{content:attr(type);
    display:block;
    margin:3px 0 0;
    font-size:14px;
    color:#5a5a5a;
  }
  button{
    float:right;
    padding:8px 12px;
    margin:8px 0 0;
    font-family:'Montserrat',sans-serif;
    border:2px solid #78788c;
    background:0;
    color:#5a5a6e;
    cursor:pointer;
    transition:all .3s
  }
  button:hover{
    background:#78788c;
    color:#fff
  }
  a:hover{
    color:#909beb;
  }
  .btn1{
    position: relative;

    left: 0px;
    top: 20px;
    padding:10px 12px;
    margin:8px 0 0;
    font-family:'Montserrat',sans-serif;
    border:2px solid #78788c;
    background:0;
    color:#909beb;
    cursor:pointer;
    transition:all .3s;
    text-decoration:none;
  }
  .btn1{
    background:#78788c;
    color:#fff;
  }
</style>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<form method="POST" action="<?php echo e(route('settings.update',$edit->id)); ?>"
      enctype="multipart/form-data" class="form">
      <h2>Edit User</h2>
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <p type=" Nama User :">
      <input id="nama" name="nama" type="text" value="<?php echo e($edit->name); ?>"></input></p>


    <p type=" Jabatan :">
      <input id="jabatan" name="jabatan" type="text" value="<?php echo e($edit->jabatan); ?>"></input></p>


<p type=" Email :">
    <input name="email" value="<?php echo e($edit->email); ?>" type="email">
      </input></p>

<p type=" Foto :">
    <input value="<?php echo e($edit->foto); ?>" name="foto" type="file" class="form-control-file">
      </input></p>


          <button name="proses" type="submit" value="ubah">Ubah</button>
          <a href="<?php echo e(route('change.password')); ?>"  name="proses" class="btn1">  Ubah Password </button>

</form>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/profile/form_edit.blade.php ENDPATH**/ ?>