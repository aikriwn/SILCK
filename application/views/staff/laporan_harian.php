 <div id="content-wrapper">
        
        <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Laporan Harian
              <div class="container">
                <strong>
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col-md-2">Nama</div>
                      <div class="col">: <?php foreach($user as $us){echo $us['nama'];}?></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col"></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="row">
                      <div class="col-md-2">NIP</div>
                      <div class="col">: <?php foreach($user as $us){echo $us['nomor_induk'];}?></div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col"></div>
                    </div>
                  </div>
                </div>
                </strong>
              </div>
            </div>
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                      <th>Durasi</th>
                      <th>Kegiatan</th>
                      <th>Hasil</th>
                      <th>Aksi</th>
                      <th>Download Pdf</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach ($harian as $hari) { ?>
                    <tr>
                      <td><?php echo $hari['tanggal']; ?></td>
                      <td><?php echo $hari['waktu']; ?></td>
                      <td><?php echo $hari['durasi']; ?> menit</td>
                      <td><?php echo $hari['kegiatan']; ?></td>
                      <td><?php echo $hari['hasil']; ?></td>
                      <td> 
                        <a href="<?=base_url();?>staff/edit_laporan_harian/<?=$hari['id_harian_staff'];?>" class="badge badge-primary float-center">Edit</a>
                        <button class="badge badge-danger float-center" onclick="hapusdata('<?=base_url();?>staff/hapus_laporan_harian/<?=$hari['id_harian_staff'];?>')">Hapus</button>
                      </td>
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

    function hapusdata(data){
      swal({
        title: "Anda yakin data akan dihapus?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = data;
          // swal("Poof! Your imaginary file has been deleted!", {  
          //   icon: "success",
          // });
        } else {
          //swal("Your imaginary file is safe!");
        }
      });
    }
</script>