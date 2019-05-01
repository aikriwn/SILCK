<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Admin Login</div>
            <div class="card-body">
                <form method='post' action='<?= base_url('login/login_admin'); ?>'>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="username" id="inputEmail" class="form-control" placeholder="nama pengguna" required="required" autofocus="autofocus" />
                            <label for="inputEmail">Nama Pengguna</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Kata Sandi" required="required">
                            <label for="inputPassword">Kata Sandi</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Ingat Kata Sandi
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Masuk">
                    <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?= base_url('login/index'); ?>">Login sebagai pengguna</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var msg = "<?= $this->session->flashdata('message'); ?>"
        if (msg) {
            swal(msg);
        }
    </script>