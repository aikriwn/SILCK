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
                      <th>Status Admin</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($pengguna as $user) { ?>
                    <tr>
                      <td><?php echo $user['username']; ?></td>
                      <td><?php echo $user['nomor_induk']; ?></td>
                      <td><?php echo $user['nama']; ?></td>
                      <td><?php echo $user['jabatan']; ?></td>
                      <td><?php echo $user['grade']; ?></td>
                      <td><?php echo $user['admin']; ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/edit_pengguna/<?= $user['id_user']; ?>"><button class="badge badge-primary float-center">Edit</button></a>
                     <button class="badge badge-danger float-center" onclick="hapusdata('<?php echo base_url(); ?>admin/hapus_pengguna/<?= $user['id_user']; ?>')">Hapus</button></a>
                    </td>
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