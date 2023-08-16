<?php
include "tgl.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Basic Card Example -->
    <div class="card shadow border-left-primary border-bottom-primary">
        <div class="card-header bg-primary py-3">
            <h6 class="m-0 font-weight-bold text-white text-center"><?= $judul; ?></h6>
        </div>
        <div class="card-body ">

            <!-- konfirmasi -->
            <div class="row">
                <div class="col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>

            <!-- <div class="row">
                    <div class="col-md-12"> -->
            <form action="<?= base_url(); ?>sekertaris/editt/<?= $detail['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $detail['id']; ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white">
                                Detail Surat
                            </div>
                            <div class="card-body">
                                <table class="table" width="100%" cellspacing="0">

                                    <tr>
                                        <td>No. Surat</td>
                                        <td>: <?= $detail['nosurat'] ?></td>
                                        <input type="hidden" class="form-control" name="nosurat" value="<?= $detail['nosurat']; ?>" readonly>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Surat</td>
                                        <td>: <?= tgl_indo($detail['tglsurat']) ?></td>
                                        <input type="hidden" class="form-control" name="tglsurat" value="<?= $detail['tglsurat']; ?>" readonly>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Di Terimah</td>
                                        <td>: <?= tgl_indo($detail['tglteri']) ?></td>
                                        <input type="hidden" class="form-control" name="tglteri" value="<?= $detail['tglteri']; ?>" readonly>
                                    </tr>

                                    <tr>
                                        <td>Perihal</td>
                                        <td>: <?= $detail['perihal'] ?></td>
                                        <input type="hidden" class="form-control" name="perihal" value="<?= $detail['perihal']; ?>" readonly>
                                    </tr>
                                    <tr>
                                        <td>Ringkasan</td>
                                        <td>: <?= $detail['isi'] ?></td>
                                        <input type="hidden" class="form-control" name="isi" value="<?= $detail['isi']; ?>" readonly>
                                    </tr>
                                    <tr>
                                        <td>Asal Instansi</td>
                                        <td>: <?= $detail['instansi'] ?></td>
                                        <input type="hidden" class="form-control" name="instansi" value="<?= $detail['instansi']; ?>" readonly>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header bg-info text-white">
                                Pesan Dari Kasubag
                            </div>
                            <div class="card-body">

                                <table class="table" width="100%" cellspacing="0">

                                    <tr>
                                        <td>Dari</td>
                                        <td>: Kasubag</td>
                                    </tr>

                                    <tr>
                                        <td>Catatan</td>
                                        <td>: <?= $detail['balas'] ?></td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>

                    <!-- penutup 1 -->

                    <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-2">
                            <div class="card-header bg-info text-white">
                                Tampilan Surat
                            </div>
                            <div class="card-body">

                                <iframe src="<?= base_url('assets/surma/' . $detail['file_surat']) ?>" height="550px" width="100%"></iframe>
                                <input type="hidden" class="form-control" name="file_surat" value="<?= $detail['file_surat']; ?>" readonly>

                            </div>
                        </div>



                    </div>
                </div>





                <div class="card shadow">
                    <div class="card-header bg-info text-white col-md-12">
                        Disposisi
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for=""> <strong>Ditujukan Kepada :</strong></label>
                        </div>

                        <div class="form-check row ml-2">
                            <input class="form-check-input" type="checkbox" name="dis1" value="Kasubag Keuangan>
                                            <label for=" nip">Kasubag Keuangan</label>
                        </div>
                        <div class="form-check row  ml-2">
                            <input class="form-check-input" type="checkbox" name="dis2" value="Kasubag Teknis dan Hubmas" <?php if ($detail['ditujukan'] == 'Kasubag Teknis dan Hubmas') {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                            <label for="nip">Kasubag Teknis dan Hubmas</label>
                        </div>
                        <div class="form-check row  ml-2">
                            <input class="form-check-input" type="checkbox" name="dis3" value="Kapala Bidang PP II" <?php if ($detail['ditujukan2'] == 'Kapala Bidang PP II') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                            <label for="nip">Kapala Bidang PP II</label>
                        </div>
                        <div class="form-check row  ml-2">
                            <input class="form-check-input" type="checkbox" name="dis4" value="Kapala Bidang PP III" <?php if ($detail['ditujukan3'] == 'Kapala Bidang PP III') {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                            <label for="nip">Kapala Bidang PP III</label>
                        </div>
                        <div class="form-check row  ml-2">
                            <input class="form-check-input" type="checkbox" name="dis5" value="Kapala Bidang PP IV" <?php if ($detail['ditujukan4'] == 'Kapala Bidang PP IV') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                            <label for="nip">Kapala Bidang PP IV</label>
                        </div>

                        <div class="form-group row">
                            <label for="ringkas"><strong>Catatan</strong></label>
                            <textarea class="form-control" name="ringkas" rows="6" required><?= $detail['catatan']; ?></textarea>
                            <?= form_error('ringkas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group row justify-content-start">
                            <button type="Submit" class="btn btn-sm btn-primary">Edit Data</button>
                        </div>

                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>