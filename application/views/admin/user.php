<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
  <div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" >
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Halo <?= $this->session->userdata('username'); ?></h1>
            <p class="text-white mt-0 mb-5">Ini adalah akun profilmu, kamu bisa mengubah nama pengguna dan kata sandi</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="col align-center">
        <div class="col-xl-8 order-xl-8">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Akun Saya</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Simpan</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="<?php base_url('admin/user/edit') ?>" method="post" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Informasi Pengguna Admin</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="user">Username</label>
                        <input class="form-control" type="text" name="user" 
                        placeholder="Username" value="<?php echo $admin->username ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Kata Sandi</label>
                        <input type="password" name="pass" class="form-control form-control-alternative" 
                        placeholder="Username" value="lucky.jesse">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Ulangi Kata Sandi</label>
                        <input type="password" id="input-first-name" class="form-control form-control-alternative" 
                        placeholder="First name" value="Lucky">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Footer -->
      <footer class="footer">
      <?php $this->load->view('admin/partials/footer.php'); ?>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>
  <!--   Optional JS   -->
  
</body>

</html>