 <div id="content-wrapper">

        <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Input Perencanaan Harian</div>
        <div class="card-body">
             <?php foreach ($edit as $kpl) { ?>
            <form action="<?= base_url('kepala/edit') ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id_harian_kepala" value="<?php echo $kpl['id_harian_kepala'] ?>">
                <label for="bulan">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $kpl['tanggal']; ?>">
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <select class="form-control" name="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hari">Waktu</label>
                <input class="form-control" name="waktu" value="<?php echo $kpl['waktu']; ?>">
            </div>
            <div class="form-group">
                <label for="hari">Kegiatan</label>
                <textarea rows="2" name="kegiatan" class="form-control" name="kegiatan"><?php echo $kpl['kegiatan']; ?>"</textarea> 
            </div>
            <div class="form-group">
                <label for="order">Sifat Order</label>
                <input class="form-control" name="order" value="<?php echo $kpl['sifat_order']; ?>">
            </div>
            <div class="form-group">
                <label for="peralatan">Jenis Peralatan</label>
                <input class="form-control" name="peralatan" value="<?php echo $kpl['jenis_peralatan']; ?>">
            </div>
             <div class="form-group">
                <label for="petugas">Petugas</label>
                <input class="form-control" name="petugas" value="<?php echo $kpl['petugas']; ?>">
            </div>
             <div class="form-group">
                <label for="produser">Produser</label>
                <input class="form-control" name="produser" value="<?php echo $kpl['produser']; ?>">
            </div>
        <button type="submit" class="btn btn-primary">Masukan Perencanaan</button>
        </form> 
                 <?php 
            } ?>
        </div>
        </div>            
</div>