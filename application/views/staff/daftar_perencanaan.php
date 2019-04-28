  <div id="content-wrapper">

    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Daftar Agenda
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
                  <th>Buat laporan</th>
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
                    <td>
                      <a href="<?= base_url(); ?>staff/laporan_staff/<?= $kpl['id_harian_kepala']; ?>" class="badge badge-primary float-center">Tulis Laporan</a>
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