 <div id="content-wrapper">
        
        <div class="container-fluid">
        <!-- <button class="btn-link"><i class="fa fa-file-pdf"> Download pdf file</i></button><br><br> -->
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
                      <th>Hari, Tanggal</th>
                      <th>Waktu</th>
                      <th>Kegiatan</th>
                      <th>Sifat Order</th>
                      <th>Jenis Peralatan</th>
                      <th>Petugas</th>
                      <th>Produser</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php foreach ($perencanaan as $kpl) { ?>
                    <tr>
                      <td><?php echo $kpl['hari']; ?>, <?php echo $kpl['tanggal']; ?></td>
                      <td><?php echo $kpl['waktu']; ?></td>
                      <td><?php echo $kpl['kegiatan']; ?></td>
                      <td><?php echo $kpl['sifat_order']; ?></td>
                      <td><?php echo $kpl['jenis_peralatan']; ?></td>
                      <td><?php echo $kpl['petugas']; ?></td>
                      <td><?php echo $kpl['produser']; ?></td>
                     <td><a href="<?php echo base_url(); ?>kepala/editRencana/<?= $kpl['id_harian_kepala']; ?>"><button class="badge badge-primary float-center">Edit</button></a>
                     <button class="badge badge-danger float-center" onclick="hapusdata('<?php echo base_url(); ?>kepala/hapusRencana/<?= $kpl['id_harian_kepala']; ?>')">Hapus</button></a>
                    </td>
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