<style>
    *, *:before, *:after {
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    body {
      background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);
      font-size: 12px;
    }

    body, button, input {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1.4px;
    }

    .background {
      display: flex;
      min-height: 100vh;
    }

    .container {
      flex: 0 1 700px;
      margin: auto;
      padding: 10px;
    }

    .screen {
      position: fixed;
      background: #3e3e3e;
      border-radius: 15px;
      top: 140px;
      left: 700px;
    }

    .screen:after {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 20px;
      right: 20px;
      bottom: 0;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
      z-index: -1;
    }

    .screen-header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background: #4d4d4f;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .screen-header-left {
      margin-right: auto;
    }

    .screen-header-button {
      display: inline-block;
      width: 8px;
      height: 8px;
      margin-right: 3px;
      border-radius: 8px;
      background: white;
    }

    .screen-header-button.close {
      background: #ed1c6f;
    }

    .screen-header-button.maximize {
      background: #e8e925;
    }

    .screen-header-button.minimize {
      background: #74c54f;
    }

    .screen-header-right {
      display: flex;
    }

    .screen-header-ellipsis {
      width: 3px;
      height: 3px;
      margin-left: 2px;
      border-radius: 8px;
      background: #999;
    }

    .screen-body {
      display: flex;
    }

    .screen-body-item {
      flex: 1;
      padding: 50px;
    }

    .screen-body-item.left {
      display: flex;
      flex-direction: column;
    }

    .app-title {
      display: flex;
      flex-direction: column;
      position: relative;
      color: #ea1d6f;
      font-size: 26px;
    }

    .app-title:after {
      content: '';
      display: block;
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 25px;
      height: 4px;
      background: #ea1d6f;
    }

    .app-contact {
      margin-top: auto;
      font-size: 8px;
      color: #888;
    }

    .app-form-group {
      margin-bottom: 15px;
    }

    .app-form-group.message {
      margin-top: 40px;
    }

    .app-form-group.buttons {
      margin-bottom: 0;
      text-align: right;
    }

    .app-form-control {
      width: 100%;
      padding: 10px 0;
      background: none;
      border: none;
      border-bottom: 1px solid #666;
      color: #ddd;
      font-size: 14px;
      text-transform: uppercase;
      outline: none;
      transition: border-color .2s;
    }

    .app-form-control::placeholder {
      color: #666;
    }

    .app-form-control:focus {
      border-bottom-color: #ddd;
    }

    .app-form-button {
      background: none;
      border: none;
      color: #ea1d6f;
      font-size: 18px;
      cursor: pointer;
      outline: none;
    }

    .app-form-button:hover {
      color: #b9134f;
    }

    .credits {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      color: #ffa4bd;
      font-family: 'Roboto Condensed', sans-serif;
      font-size: 16px;
      font-weight: normal;
    }

    .credits-link {
      display: flex;
      align-items: center;
      color: #fff;
      font-weight: bold;
      text-decoration: none;
    }

    .dribbble {
      width: 20px;
      height: 20px;
      margin: 0 5px;
    }

    @media  screen and (max-width: 520px) {
      .screen-body {
        flex-direction: column;
      }

      .screen-body-item.left {
        margin-bottom: 30px;
      }

      .app-title {
        flex-direction: row;
      }

      .app-title span {
        margin-right: 12px;
      }

      .app-title:after {
        display: none;
      }
    }

    @media  screen and (max-width: 600px) {
      .screen-body {
        padding: 40px;
      }

      .screen-body-item {
        padding: 0;
      }
    }

    </style>

    <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>

            <div class="screen-body">
                <form method="POST" action="<?php echo e(route('change.password')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="text-danger"><?php echo e($error); ?></p>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="screen-body-item left">
                <div class="app-title">
                  <span>Ganti Passwordmu Dibawah</span>


             <span><div class="app-contact">Jangan Sampe Lupa Ya :)</div></div></span>
              </div>
              <div class="screen-body-item">
                <div class="app-form">

                  <div class="app-form-group">
                    <input  id="password" type="password" name="current_password" autocomplete="current-password" class="app-form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="current_password"  required autofocus  placeholder="<?php echo e(__('Current Password')); ?>">
                    <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>

                  <div class="app-form-group">
                    <input id="new_password" type="password" class="app-form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="new_password" autocomplete="current-password"  placeholder="<?php echo e(__('New Password')); ?>">
                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>

                  <div class="app-form-group message">
                    <input class="app-form-control" id="new_confirm_password" type="password"  name="new_confirm_password" autocomplete="current-password" required  placeholder="<?php echo e(__('New Confirm Password')); ?>">
                  </div>
    <br><br>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button" type="submit"> <?php echo e(__('Update Password')); ?></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
<?php /**PATH C:\xampp\htdocs\bckp\TA2\resources\views/changePassword.blade.php ENDPATH**/ ?>