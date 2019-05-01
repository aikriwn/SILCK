 <div id="content-wrapper">
        
        <div class="container-fluid">
        <button class="btn-link"><i class="fa fa-file-pdf"> Download pdf file</i></button><br><br>
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
                 <?php foreach ($laporan_kepala as $kpl) : ?>
                    <tr>
                      <td><?php echo $kpl['hari']; ?></td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td> <button class="btn-primary">Edit</button><button class="btn-danger">Hapus</button></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
        </div>  
        </div>                
</div>