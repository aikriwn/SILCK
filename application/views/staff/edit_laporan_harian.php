<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Laporan Harian</div>
            <div class="card-body">
                <?php foreach ($edit as $kpl) { ?>
                    <form action="<?= base_url('staff/edit') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id_harian_staff" value="<?php echo $kpl['id_harian_staff'] ?>">
                            <label for="bulan">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo $kpl['tanggal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hari">Waktu</label>
                            <input class="form-control" name="waktu" value="<?php echo $kpl['waktu']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hari">Durasi</label>
                            <input class="form-control" name="durasi" value="<?php echo $kpl['durasi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hari">Kegiatan</label>
                            <textarea rows="2" name="kegiatan" class="form-control" name="kegiatan"><?php echo $kpl['kegiatan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hasil</label>
                            <textarea rows="2" name="hasil" class="form-control" name="hasil"><?php echo $kpl['hasil']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui Laporan</button>
                    </form>
                <?php
            } ?>
            </div>
        </div>
    </div>