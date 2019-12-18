<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->

                    <!-- End of Topbar -->

                    <!-- Start Container Fluid -->

                    <div id="content-wrapper">

                        <div class="container-fluid">

                            <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                            <?php endif; ?>

                            <div class="card mb-3">
                                <div class="card-header">
                                </div>
                                <div class="card-body">

                                    <form action="<?php base_url('admin/datapasien/edit') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="id_barang">No Barang</label>
                                                    <input class="form-control" type="text" name="id_barang"
                                                        placeholder="No Barang" />
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="nama_brg">Nama Barang</label>
                                                    <input class="form-control" type="text" name="nama_brg"
                                                        placeholder="Nama Barang" />
                                                </div>
                                            </div>
                                            <div class=" col-4">
                                                <div class="form-group">
                                                    <label for="jenis_brg">Jenis Barang</label>
                                                    <input class="form-control" type="text" name="jenis_brg"
                                                        placeholder="Jenis Barang" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi Barang</label>
                                                    <input class="form-control" type="text" name="deskripsi"
                                                        placeholder="Deskripsi Barang" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="gambar_barang">Gambar Barang</label>
                                                    <input class="form-control" type="file" name="gambar_barang"
                                                        placeholder="Gambar Barang" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="harga">Harga Barang</label>
                                                    <input class="form-control" type="text" name="harga"
                                                        placeholder="Harga Barang" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="grosir">Grosir Barang</label>
                                                    <input class="form-control" type="text" name="grosir"
                                                        placeholder="Grosir Barang" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="diskon">Diskon Barang</label>
                                                    <input class="form-control" type="text" name="diskon"
                                                        placeholder="Diskon Barang" />
                                                </div>
                                            </div>
                                            
                                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                    </form>

                                </div>


                            </div>
                            <!-- /.container-fluid -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Main Content -->
      <!-- Footer -->
      <?php $this->load->view('admin/partials/footer.php'); ?>
    </div>
  </div>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>