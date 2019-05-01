<div id="content-wrapper">

<div class="container-fluid">
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Verifikasi Pengguna</div>
<div class="card-body">
     <?php foreach ($edit as  $user) { ?>
    <form action="<?= base_url('admin/verifikasi') ?>" method="post">

    <div class="form-group">
        <input type="hidden" name="id_user" value="<?php echo  $user['id_user'] ?>">
    </div>
    <div class="form-group">
        <label for="hari">Username</label>
        <input class="form-control" name="username" value="<?php echo  $user['username']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Password</label>
        <input class="form-control" name="password" value="<?php echo  $user['password']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Nomor Induk</label>
        <input class="form-control" name="nomor_induk" value="<?php echo  $user['nomor_induk']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Nama</label>
        <input class="form-control" name="nama" value="<?php echo  $user['nama']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">ID Jabatan</label>
        <input class="form-control" name="id_jabatan" value="<?php echo  $user['id_jabatan']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Jabatan</label>
        <input class="form-control" name="jabatan" value="<?php echo  $user['jabatan']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Grade</label>
        <input class="form-control" name="grade" value="<?php echo  $user['grade']; ?>">
    </div>
    <div class="form-group">
        <label for="hari">Status Admin</label>
        <input class="form-control" name="admin" value="<?php echo  $user['admin']; ?>">
    </div>

<button type="submit" class="btn btn-primary">Verifikasi Pengguna</button>
</form> 
         <?php 
    } ?>
</div>
</div>            
</div>