<?php $__env->startSection('content'); ?>
<?php
$totalrowout = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->count('id');
$totalrowin = DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->count('id');
$pengeluaransmp = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->Where('unit_id', '=', 2)->sum('jumlah_anggaran');
$pengeluaransmk = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->Where('unit_id', '=', 3)->sum('jumlah_anggaran');
$pengeluaranasrama = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->Where('unit_id', '=', 1)->sum('jumlah_anggaran');
$pemasukan = DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');

// persenan

$pemasukan =DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
$pengeluaran = DB::table('aktivitas')->where('jenis_anggaran','=','Pengeluaran')->sum('jumlah_anggaran');

$count= $pengeluaran/$pemasukan * 100;
$countin = 100-$count;
?>


<div class="page-holder bg-gray w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
              <div class="flex-grow-1 d-flex align-items-left">
                <div class="dot mr-3 bg-violet"></div>
                <div class="text">

                  <h6 class="mb-0">Total Rekap Pengeluaran</h6><span class="text-gray"><h6><?php echo e($totalrowout); ?></h6></span>

                </div>
              </div>
              <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
            </div>
          </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-xl-3 col-lg-6 mb-2 mb-xl-0">
            <div class="bg-dark  align-items-center justify-content-between">
              <div class="flex-grow-1 d-flex align-items-right">
              </div></div></div>


          <div class="col-xl-3 col-lg-6 mb-2 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
              <div class="flex-grow-1 d-flex align-items-right">
                <div class="dot mr-3 bg-red"></div>
                <div class="text">
                  <h6 class="mb-0">Total Rekap Pemasukan </h6> <span class="text-gray"><h6> <?php echo e($totalrowin); ?></h6></span>
                </div>
              </div>
              <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="row mb-1">
          <div class="col-lg-6 mb-0 mb-lg-0 pl-lg-0">
            <div class="card">
                <div class="card mb-1">
                    <div class="card-body">
                      <div class="row align-items-center flex-row">
                        <div class="col-lg-5">
                          <h2 class="mb-0 d-flex align-items-center"><span><?php echo e(number_format($count,0)); ?> %</span><span class="dot bg-violet d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Pemasukan Yang Digunakan</span>
                          <hr><small class="text-muted">Pemasukan Yang Digunakan Untuk Pengeluaran </small>
                        </div>

                        <div class="col-lg-7">
                            <canvas id="pieChartHome2"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-lg-6 mb-0 mb-lg-0">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center flex-row">
                  <div class="col-lg-5">
                    <h2 class="mb-0 d-flex align-items-center"><span><?php echo e(number_format($countin,0,',','.')); ?>%</span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Sisa Saldo </span>
                    <hr><small class="text-muted">Sisa Pemasukan Setelah Pengeluaran</small>
                  </div>
                  <div class="col-lg-7">
                    <canvas id="pieChartHome1"></canvas>
                  </div>
                </div>
              </div>
            </div>
        </div>
            <div class="col-lg-12 mb-0  mb-lg-0 pl-lg-0">
                <div class="card">
                <div class="card mb-0">
            <div class="card-body">
                <small class="text-muted"><center>Pemasukan Dari Pengurus YBM PLN</small><hr></center>
                <div class="chart-holder">
                    <center> <h2 class="mb-0"><span>
                    Rp. <?php echo e(number_format($pemasukan,0,',','.')); ?></span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small"><br>Semua Jumlah Pemasukan</center></span>
                </div></div></div>
                </div>
              </div>
          </div>

      </section>
<section class="py-5">
  <div class="row text-dark">
    <div class="col-lg-4 mb-0 mb-lg-0">
      <div class="card rounded credit-card bg-hover-gradient-violet">
        <div class="content d-flex flex-column justify-content-between p-4">
          <h1 class="mb-5"><img src="<?php echo e(asset('img\asrama.png')); ?>" width="200px" height="200px" class="gbr"></h1>
          <div class="d-flex justify-content-between align-items-end pt-3">
            <div class="text-uppercase">
              <div class="font-weight-bold d-block">Pengeluaran</div><small class="text-gray">Asrama</small>
            </div>
            <h3 class="mb-0">Rp.&nbsp;&nbsp;&nbsp;<?php echo e(number_format($pengeluaranasrama,0,',','.')); ?>-,</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-0 mb-lg-0">
      <div class="card rounded credit-card bg-hover-gradient-blue">
        <div class="content d-flex flex-column justify-content-between p-4">
          <h1 class="mb-5"><img src="<?php echo e(asset('img/smp.png')); ?>" width="100px" height="100px" class="gbr"></h1>
          <div class="d-flex justify-content-between align-items-end pt-3">
            <div class="text-uppercase">
              <div class="font-weight-bold d-block">Pengeluaran</div><small class="text-gray">SMP</small>
            </div>
            <h3 class="mb-0">Rp.&nbsp;&nbsp;&nbsp;<?php echo e(number_format($pengeluaransmp,0,',','.')); ?>-,</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-0 mb-lg-0">
      <div class="card rounded credit-card bg-hover-gradient-green">
        <div class="content d-flex flex-column justify-content-between p-4">
          <h1 class="mb-5"><img src="<?php echo e(asset('img/smk.png')); ?>" width="75px" height="75px" class="gbr"></h1>
          <div class="d-flex justify-content-between align-items-end pt-3">
            <div class="text-uppercase">
              <div class="font-weight-bold d-block">Pengeluaran</div><small class="text-gray">SMK</small>
            </div>
            <h3 class="mb-0">Rp.&nbsp;&nbsp;&nbsp;<?php echo e(number_format($pengeluaransmk,0,',','.')); ?>-,</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('puter'); ?>
<script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
<script>
$(function () {

    var violet = '#DF99CA',
        red = '#F0404C',
        green = '#7CF29C',
        blue = '#4680ff';


    


    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var PIECHART = $('#pieChartHome1');
    var myPieChart = new Chart(PIECHART, {
        type: 'doughnut',
        options: {
            cutoutPercentage: 90,
            legend: {
                display: false
            }
        },
        data: {
            labels: [
                "Sisa Saldo",
                "Yang Sudah Dipakai",

            ],
            datasets: [{
                data: [<?php echo e($countin); ?>, <?php echo e($count); ?>],
                borderWidth: [0, 0],
                backgroundColor: [
                    "#629dd9",
                    "#d7dbdd",
                ],
                hoverBackgroundColor: [
                    "#629dd9",
                    "#d7dbdd",
                ]
            }]
        }
    });



    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var PIECHART = $('#pieChartHome2');
    var myPieChart = new Chart(PIECHART, {
        type: 'doughnut',
        options: {
            cutoutPercentage: 90,
            legend: {
                display: false
            }
        },
        data: {
            labels: [
                "Pemasukan Yang Digunakan",
                "Pemasukan Yang Belum Digunakan"
            ],
            datasets: [{
                data: [<?php echo e($count); ?>, <?php echo e($countin); ?>],
                borderWidth: [0, 0],
                backgroundColor: [
                    "#909beb",
                    "#d7dbdd"
                ],
                hoverBackgroundColor: [
                    "#909beb",
                    "#d7dbdd"
                ]
            }]
        }
    });





});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TA\resources\views/layouts/home.blade.php ENDPATH**/ ?>