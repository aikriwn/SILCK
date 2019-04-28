  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method='post' action='<?= base_url('login/registrasi'); ?>'>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="NamaLengkap" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">Nama Lengkap</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="Username" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Nama Pengguna</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="NIP" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                    <label for="inputEmail">NIP</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Kata Sandi</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="jabatan" id="firstName" class="form-control" placeholder="Email address" required="required">
                    <label for="firstName">Jabatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="grade" id="lastName" class="form-control" placeholder="Password" required="required">
                    <label for="lastName">Kelas</label>
                  </div>
                </div>
              </div>
            </div>
                <!-- <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="pass"id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword"</label>
                  </div>
                </div> -->
              <!-- </div>
            </div> -->
            <input type="submit" class="btn btn-primary btn-block" value="Daftar">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?= base_url('login/index'); ?>">Sudah Punya Akun?masuk Disini</a>
          </div>
        </div>
      </div>
    </div>