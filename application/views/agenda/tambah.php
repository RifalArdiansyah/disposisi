<style>
  .bold-text {
    font-weight: bold;
  }
</style>
<div class="container-fluid">
  <div class="card shadow" style="background-color: #333333; border: 3px solid #CCCCCC;"> <!-- Add border property here -->
    <div class="card-header py-3" style="background-color: #383444;">
      <h6 class="m-0 font-weight-bold text-white"><?= $judul; ?></h6>
    </div>
    <div class="card-body col-lg-12" style="background-color: #484454;">

      <!-- pesan error -->
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

      <!-- pesan berhasil tambah data -->
      <?= $this->session->flashdata('message'); ?>

      <?php echo form_open_multipart('agenda/add') ?>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">No.Surat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nosurat" style="background-color: #48444c; color: white;">
          <?= form_error('nosurat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">Tanggal Surat</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tglmasuk" style="background-color: #48444c; color: white;">
          <?= form_error('tglmasuk', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">Tanggal diterima</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tgltrima" style="background-color: #48444c; color: white;">
          <?= form_error('tgltrima', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">Perihal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="perihal" style="background-color: #48444c; color: white;">
          <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="ringkas" class="col-sm-2 col-form-label">Isi Ringkasan Surat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="ringkas" rows="6" style="background-color: #48444c; color: white;"></textarea>
          <?= form_error('ringkas', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">Asal Instansi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="instansi" style="background-color: #48444c; color: white;">
          <?= form_error('instansi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row text-light">
        <label for="menu" class="col-sm-2 col-form-label">Upload Surat</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="surat" style="background-color: #48444c; color: white;">
        </div>
      </div>

      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <button type="Submit" class="btn bold-text" style="background-color: #6b6c7b; color: white; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">Tambah Data</button>
        </div>
      </div>


      <?php echo form_close() ?>

    </div>
  </div>
</div>
</div>