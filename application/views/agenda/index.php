<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
  <h6 class="text-center text-white"><strong>Selamat Datang Di Dashboard Sistem Status Anda <br> Adalah : Peanggenda Surat Masuk</strong></h6><br>


  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card" style="background-color: #4169e1; color: white;">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-uppercase text-light mb-2">Surat Masuk Belum Dibaca</h6>
              <h2 class="font-weight-bold"><?= $jml ?></h2>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card" style="background-color: #7d6608; color: white">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-uppercase text-light mb-2">Surat Masuk Sudah Dibaca</h6>
              <h2 class="font-weight-bold"><?= $jmla ?></h2>
            </div>
            <div class="icon-circle bg-light">
              <i class="fas fa-envelope-open-text text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card" style="background-color: #008080; color: white;">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-uppercase text-light mb-2">Total Surat</h6>
              <h2 class="font-weight-bold"><?= $jml + $jmla ?></h2>
            </div>
            <div class="icon-circle bg-light">
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