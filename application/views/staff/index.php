      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('staff'); ?>">Staff</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <h5>Daftar Agenda</h5>
                  <div class="mr-5">Lihat Daftar Agenda</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('staff/daftar_perencanaan'); ?>">
                  <span class="float-left">Baca Selengkapnya</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">Laporan Harian</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('staff/laporan_harian'); ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
