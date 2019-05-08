      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('admin'); ?>">Admin</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <h5>Verifikasi Pengguna</h5>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/verifikasi_pengguna'); ?>">
                  <span class="float-left">Baca Selengkapnya</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <h5>Daftar Pengguna</h5>
                  <div class="mr-5">Lihat Detail Pengguna</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/daftar_pengguna'); ?>">
                  <span class="float-left">Baca Selengkapnya</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            
          </div>
        </div>
