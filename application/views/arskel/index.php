<style>
  .bold-text {
    font-weight: bold;
  }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

  <div class="row">
    <div class="col-lg-12">

      <!-- Basic Card Example -->
      <div class="card shadow" style="background-color: #484454; border: 3px solid #CCCCCC;">
        <div class="card-header py-3" style="background-color: #383444;">
          <h6 class="m-0 font-weight-bold text-white"><?= $judul; ?></h6>
        </div>
        <div class="card-body col-lg-12">

          <!-- pesan error -->
          <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

          <!-- pesan berhasil tambah data -->
          <?= $this->session->flashdata('message'); ?>
          <a href="<?= base_url('arsip/add'); ?>" class="btn btn-sm mb-3 bold-text" style="background-color: #6b6c7b; color: white; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">Tambah Data</a>
          <!-- <a href="<?= base_url('arsip/pdfm2'); ?>" class="btn btn-success btn-sm mb-3">Print Pdf</a> -->
          <a href="<?= base_url('arsip/cetak2'); ?>" target="blank" class="btn btn-warning btn-sm mb-3 bold-text" style="color: white; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">Print</a>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: white;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No.Surat</th>
                <th scope="col">Ringkasan</th>
                <th scope="col">Pengelola</th>
                <th scope="col">Tgl Surat</th>
                <th scope="col">Kepada</th>
                <!-- <th scope="col">Keterangan</th> -->
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach ($tamkel as $sm) : ?>
                <tr>
                  <td scope="row"><?= $no ?></td>
                  <td><?= $sm['nosurat'] ?></td>
                  <td><?= $sm['ringkasan'] ?></td>
                  <td><?= $sm['pengelolah'] ?></td>
                  <td><?= $sm['tglsurat'] ?></td>
                  <td><?= $sm['kepada'] ?></td>
                  <!-- <td><?= $sm['keterangan'] ?></td> -->
                  <td>
                    <a href="<?= base_url(); ?>arsip/detkel/<?= $sm['id'] ?>" class="btn btn-success btn-sm bold-text">Detail</a>
                    <a href="<?= base_url(); ?>arsip/delete/<?= $sm['id'] ?>" class="btn btn-danger btn-sm bold-text" onclick="return confirm('Yakin mau menghapus');">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
              <?php endforeach ?>

            </tbody>
          </table>

        </div>
      </div>

    </div>


  </div>
</div>

</div>