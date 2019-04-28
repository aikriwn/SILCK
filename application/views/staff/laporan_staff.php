 <div id="content-wrapper">

     <div class="container-fluid">
         <div class="card mb-3">
             <div class="card-header">
                 <i class="fas fa-table"></i>
                 Input Laporan Harian</div>
             <div class="card-body">
                 <?php foreach ($kgt as $kgt) { ?>
                     <form action="<?= base_url('staff/insert_laporan') ?>" method="post">
                         <div class="form-group">
                             <label for="bulan">Tanggal</label>
                             <input type="date" class="form-control" name="tanggal">
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
                             <input class="form-control" name="waktu">
                         </div>
                         <div class="form-group">
                             <label for="hari">Durasi</label>
                             <input class="form-control" name="durasi">
                         </div>
                         <div class="form-group">
                             <label for="hari">Kegiatan</label>
                             <textarea rows="2" name="kegiatan" class="form-control"><?php echo $kgt['kegiatan']; ?></textarea>
                         </div>
                         <div class="form-group">
                             <label for="hari">Hasil</label>
                             <textarea rows="2" name="hasil" class="form-control" name="hasil"></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary">Simpan Laporan</button>
                     </form>
                 <?php
                } ?>
             </div>
         </div>
     </div>
     <script>
         var msg = "<?= $this->session->flashdata('message'); ?>"
         if (msg) {
             swal("", msg, "success");
         }
     </script>