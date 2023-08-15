<style>
  .bold-text {
    font-weight: bold;
  }
</style>
<div class="container-fluid">
  <div class="card shadow" style="background-color: #484454; border: 3px solid #CCCCCC;">
    <div class="card-header py-3" style="background-color: #383444;">
      <h6 class="m-0 font-weight-bold text-white"><?= $judul; ?></h6>
    </div>
    <div class="card-body col-lg-12" style="background-color: #484454;">

      <!-- Page Heading -->
      <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->

      <div class="row">
        <div class="col-lg-12">
          <!-- <form action="<?= base_url('agenda/editproses') ?>" method="post"> -->

          <?= form_open_multipart('agenda/editproses') ?>

          <input type="hidden" name="id" value="<?= $edit['id']; ?>">

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">No.Surat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nosurat" style="background-color: #48444c; color: white;" value="<?= $edit['nosurat']; ?>" required>
              <?= form_error('nosurat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">Tanggal Surat</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tglmasuk" style="background-color: #48444c; color: white;" value="<?= $edit['tglsurat']; ?>" required>
              <?= form_error('tglmasuk', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">Tanggal diterima</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tgltrima" style="background-color: #48444c; color: white;" value="<?= $edit['tglteri']; ?>" required>
              <?= form_error('tgltrima', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">Perihal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="perihal" style="background-color: #48444c; color: white;" value="<?= $edit['perihal']; ?>" required>
              <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="ringkas" class="col-sm-2 col-form-label">Isi Ringkasan Surat</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="ringkas" rows="4" style="background-color: #48444c; color: white;"><?= $edit['isi']; ?></textarea>
              <?= form_error('ringkas', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">Asal Instansi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="instansi" style="background-color: #48444c; color: white;" value="<?= $edit['instansi']; ?>" required>
              <?= form_error('instansi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row text-white">
            <label for="menu" class="col-sm-2 col-form-label">Edit Surat</label>
            <div class="col-sm-10">
              <iframe src="<?= base_url('assets/surma/' . $edit['file_surat']) ?>" height="300px" width="60%"></iframe>
              <input type="file" class="form-control" name="surat">
            </div>
          </div>

          <div class="form-group row justify-content-end">
            <div class="col-sm-10">
              <button type="Submit" class="btn bold-text" style="background-color: #6b6c7b; color: white; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">Edit Data</button>
            </div>
          </div>

          <?php echo form_close() ?>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End of Main Content -->
</div>