 <div id="content-wrapper">
        
        <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Daftar Rencana
            </div>
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>nama</th>
                      <th>tanggal</th>
                      <th>waktu</th>
                      <th>durasi</th>
                      <th>kegiatan</th>
                      <th>hasil</th>
                      <th>PDF</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach ($harian as $hari) { ?>
                    <tr>
                      <td><?php echo $hari['username']; ?></td>
                      <td><?php echo $hari['tanggal']; ?></td>
                      <td><?php echo $hari['waktu']; ?></td>
                      <td><?php echo $hari['durasi']; ?></td>
                      <td><?php echo $hari['kegiatan']; ?></td>
                      <td><?php echo $hari['hasil']; ?></td>
                      <td><a href="<?=base_url();?>c_report/index/<?=$hari['tanggal']."/".$hari['id_user'];?>" ><i class="fa fa-file-pdf"> Download Laporan</i></a></td>
                    </tr>
                 <?php 
              } ?>
                  </tbody>
                </table>
              </div>
        </div>  
        </div>                
</div>
<script>
    var msg = "<?= $this->session->flashdata('message'); ?>"
    if(msg){
      swal("",msg,"success");
    }
</script>