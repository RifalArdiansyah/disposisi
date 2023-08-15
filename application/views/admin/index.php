<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> Sekertaris KPU</strong></h6><br>

  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Info Surat Masuk Dari Agendaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jml ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Info Surat Masuk Dari Agendaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmla ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Kasubag Belum Di Baca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jl ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Surat Masuk Dari Kasubag Sudah Di Baca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jla ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <img class="img-thumbnail" src="<?= base_url('assets/'); ?>img/3.svg" width="80" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> kasubag</strong></h6><br>

  <!-- Content Row -->
  <div class="row">



    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlk ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlak ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Info Surat Terkirim Ke Sekertaris</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlak ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> Kapala Bidang PP I</strong></h6><br>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmli ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlai ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Surat</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmli + $jmlai ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> Kapala Bidang PP II</strong></h6><br>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlaii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Surat</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlii + $jmlaii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> Kapala Bidang PP III</strong></h6><br>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmliii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Dari Sekertaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlaiii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Surat</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmliii + $jmlaiii ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <h6 class="text-center text-white"><strong>Info Notifikasi Surat Masuk Bagian <br> Kapala Bidang PP IV</strong></h6><br>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Sekertaris Belum Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlv ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Surat Masuk Sekertaris Sudah Dibaca</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlav ?></div>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Surat</div>
              <div class="h5 mb-0 font-weight-bold text-light-800">Total : <?= $jmlv + $jmlav ?></div>
            </div>
            <div class="icon-circle bg-light">
              <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
              <i class="fas fa-inbox text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>