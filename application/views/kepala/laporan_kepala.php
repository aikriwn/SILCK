 <div id="content-wrapper">

        <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Input Perencanaan Harian</div>
        <div class="card-body">
         <form action="<?= base_url('kepala/insert_rencana') ?>" method="post">
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
                <label for="hari">Kegiatan</label>
                <textarea rows="2" name="kegiatan" class="form-control" name="kegiatan">Pelaksanaan Produksi Paket siaran Pro 1, Pro 2, & Pro 4 di Conty Pro 1 & Pro 4 di Kotabaru, Pro 2 di Demangan, & MCR.</textarea> 
            </div>
            <div class="form-group">
                <label for="order">Sifat Order</label>
                <input class="form-control" name="order" value="On air, Sound sistem, Si-Lang, Recording atau Si-Lang, Sound System, Setting dan Pemeliharaan.">
            </div>
            <div class="form-group">
                <label for="peralatan">Jenis Peralatan</label>
                <input class="form-control" name="peralatan" Value="Peralatan Studio Terinstal, Sound sederhana & Infokus, Mixer Solidyn dan Peralatan Video Conty.">
            </div>
             <div class="form-group">
                <label for="petugas">Petugas</label>
                <input class="form-control" name="petugas">
            </div>
             <div class="form-group">
                <label for="produser">Produser</label>
                <input class="form-control" name="produser">
            </div>
        <button type="submit" class="btn btn-primary">Masukan Perencanaan</button>
        </form> 
        </div>
        </div>            
</div>
<script>
    var msg = "<?= $this->session->flashdata('message'); ?>"
    if(msg){
      swal("",msg,"success");
    }
</script>