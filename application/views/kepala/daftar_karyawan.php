      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Daftar Karyawan</a>
            </li>
            <li class="breadcrumb-item active">Tabel</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Karyawan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Pengguna</th>
                      <th>Nomor Induk</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Grade</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($karyawan as $staff) { ?>
                    <tr>
                      <td><?php echo $staff['username']; ?></td>
                      <td><?php echo $staff['nomor_induk']; ?></td>
                      <td><?php echo $staff['nama']; ?></td>
                      <td><?php echo $staff['jabatan']; ?></td>
                      <td><?php echo $staff['grade']; ?></td>
                    </tr>
                 <?php 
              } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>