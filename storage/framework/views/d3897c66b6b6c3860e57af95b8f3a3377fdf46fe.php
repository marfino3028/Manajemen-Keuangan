
    <div id="sidebar" class="sidebar gray py-1">
      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
      <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a href="<?php echo e(url('/')); ?>" class="sidebar-link text-muted"><i class="fas fa-home"></i><span>&nbsp;Home</span></a></li>
            <li class="sidebar-list-item"><a href="<?php echo e(url('/pemasukan')); ?>" class="sidebar-link text-muted"><i class="fas fa-donate"></i>&nbsp;&nbsp;<span>Income</span></a></li>
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="true" aria-controls="pages" class="sidebar-link text-muted"><i class="fas fa-book"></i>&nbsp;&nbsp;<span>Spending</span></a>
                <div id="pages" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                        <li class="sidebar-list-item"><a href="<?php echo e(url('/asrama')); ?>" class="sidebar-link text-muted pl-lg-5"><i class="fas fa-hotel"></i>&nbsp;&nbsp;&nbsp;Asrama</a></li>
                        <li class="sidebar-list-item"><a href="<?php echo e(url('/smp')); ?>" class="sidebar-link text-muted pl-lg-5"><i class="fas fa-school"></i>&nbsp;&nbsp;SMP</a></li>
                        <li class="sidebar-list-item"><a href="<?php echo e(url('/smk')); ?>" class="sidebar-link text-muted pl-lg-5">&nbsp;<i class="fas fa-university"></i>&nbsp;&nbsp;&nbsp;SMK</a></li>
                    </ul>
                  </div>
            </li>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">DATA</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="<?php echo e(url('/pegawai')); ?>" class="sidebar-link text-muted"><p><i class="fas fa-user-tie"></i><span>&nbsp;&nbsp;Pegawai</span></p></a></li>
              <li class="sidebar-list-item"><a href="<?php echo e(url('/pengurus')); ?>" class="sidebar-link text-muted"><p><i class="fas fa-user-tie"></i><span>&nbsp;&nbsp;Pengurus</span></p></a></li>
            <li class="sidebar-list-item"><a href="<?php echo e(url('/logout')); ?>" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Sign Out</span></a></li>
      </ul>
          </div>

<?php /**PATH C:\xampp\htdocs\TA\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>