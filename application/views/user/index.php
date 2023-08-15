<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-white"><?= $judul; ?></h1>

  <!-- konfirmasi -->
  <div class="row">
    <div class="col-md-6">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px; background-color: #333333; border: 3px solid #CCCCCC; ">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-white"><?= $user['nama']; ?></h5>
          <p class="card-text text-white"><?= $user['email']; ?></p>
          <p class="card-text text-white"><small class="text-mutted text-white">Member Since <?= date('d F Y', $user['date_created']) ?></small></p>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->