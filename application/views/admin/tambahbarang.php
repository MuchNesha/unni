<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
  <div class="main-content">
            <!-- Page content -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Start Container Fluid -->
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Tambah Barang</h3>
                </div>
                <div class="col-4 text-right">
                <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                                        <br />
                                        <?php if ($this->session->flashdata('success')) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                        <?php endif; ?>
                </div>
              </div>
            </div>

                            <div class="card-body">
                                    <form action="<?php base_url('admin/databarang/add') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_barang">Nama Barang</label>
                                                    <input class="form-control" type="text" name="id_barang"
                                                        placeholder="No Barang" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form-control">Pilih kategori Barang</label>
                                                    <select class="form-control" id="kategoribarang">
                                                    <option>Hijab Instant</option>
                                                    <option>Hijab Segiempat</option>
                                                    <option>Baju Muslim</option>
                                                    <option>Aksesoris</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="harga">Harga Barang</label>
                                                    <input class="form-control" type="number" name="harga" placeholder="Rp." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="grosir">Harga Grosir Barang</label>
                                                    <input class="form-control" type="number" name="grosir" placeholder="Rp." />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="grosir">Per</label>
                                                    <input class="form-control" type="number" name="qty" placeholder="QTY" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gambar_barang">Gambar Barang</label>
                                                    <input class="form-control" type="file" name="gambar_barang" placeholder="Gambar Barang" />
                                                </div>
                                            </div>

                                            <div class=" col-3">
                                                <div class="form-group">
                                                    <label for="Stock">Jumlah Stock</label>
                                                    <input class="form-control" type="number" name="Stock" placeholder="Stock" />
                                                </div>
                                            </div>

                                            <div class=" col-3">
                                                <div class="form-group">
                                                    <label for="Stock">Diskon (%)</label>
                                                    <input class="form-control" type="number" name="diskon" placeholder="%" />
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi Barang</label>
                                                    <form>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis deskripsi barang..."></textarea>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                           
                                        <label>Ukuran yang Tersedia</label>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="s" type="checkbox">
                                            <label class="custom-control-label" for="s">S</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="m" type="checkbox">
                                            <label class="custom-control-label" for="m">M</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="l" type="checkbox">
                                            <label class="custom-control-label" for="l">L</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="xl" type="checkbox">
                                            <label class="custom-control-label" for="xl">XL</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="xxl" type="checkbox">
                                            <label class="custom-control-label" for="xxl">XXL</label>
                                        </div>


                                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                        <br />
                                        <?php if ($this->session->flashdata('success')) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </form>

                                    </div>


</div>

</div>
</div>
</div>
</div>

</div>
<!-- End of Main Content -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
        <!-- Footer -->
      <?php $this->load->view('admin/partials/footer.php'); ?>
    </div>
  </div>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>