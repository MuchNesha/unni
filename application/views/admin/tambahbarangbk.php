<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
<div class="main-content">
    <!-- Page content -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <h1 style="color:aliceblue">Tambah Barang</h1>
                <br>
                <h3 style="color:aliceblue">Admin bisa menambahkan barang dihalaman ini 😉</h3>
                <br>
                <!-- Start Container Fluid -->
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Tambah Barang</h3>
                            </div>
                            <div class="col-4 text-right">

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
                        <form action="<?php echo base_url('admin/databarang/add') ?>" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_barang">Nama Barang</label>
                                    <input class="form-control" type="text" name="nama_brg" placeholder="Nama Barang" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form-control">Pilih kategori Barang</label>
                                    <select class="form-control" name="id_jenis">
                                        <option value="">Kategori Barang</option>
                                        <?php
                                        foreach ($kategori as $grup) {
                                            echo '<option value="' . $grup->id_jenis . '">' . $grup->nama_jenis . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga">Harga Barang</label>
                                    <input class="form-control" type="number" name="harga_brg" placeholder="Rp." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="grosir">Harga Grosir Barang</label>
                                    <input class="form-control" type="number" name="grosir_barang" placeholder="Rp." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="grosir">Per</label>
                                    <input class="form-control" type="number" name="per" placeholder="QTY" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gambar_barang">Gambar Barang</label>
                                    <input class="form-control" type="file" name="gambar_barang" placeholder="Gambar Barang" multiple="multiple" />
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="form-group">
                                    <label for="Stock">Stock</label>
                                    <input class="form-control" type="number" name="stok" placeholder="Stock" />
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="form-group">
                                    <label for="Stock">Diskon (%)</label>
                                    <input class="form-control" type="number" name="diskon_barang" placeholder="%" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Barang</label>
                                    <form>
                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis deskripsi barang..."></textarea>
                                    </form>
                                </div>
                            </div>

                            <label>Ukuran yang Tersedia</label>
                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" name="ukuran" id="s" value="S" type="checkbox">
                                <label class="custom-control-label" for="s">S</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" name="ukuran" id="m" value="M" type="checkbox">
                                <label class="custom-control-label" for="m">M</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" name="ukuran" id="l" value="L" type="checkbox">
                                <label class="custom-control-label" for="l">L</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" name="ukuran" id="xl" value="XL" type="checkbox">
                                <label class="custom-control-label" for="xl">XL</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" name="ukuran" id="xxl" value="XXL" type="checkbox">
                                <label class="custom-control-label" for="xxl">XXL</label>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Barang</label>
                                        <form>
                                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis deskripsi barang..."></textarea>
                                        </form>
                                    </div>
                                </div>

                                <label>Ukuran yang Tersedia</label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" name="ukuran" id="s" value="S" type="checkbox">
                                    <label class="custom-control-label" for="s">S</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" name="ukuran" id="m" value="M" type="checkbox">
                                    <label class="custom-control-label" for="m">M</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" name="ukuran" id="l" value="L" type="checkbox">
                                    <label class="custom-control-label" for="l">L</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" name="ukuran" id="xl" value="XL" type="checkbox">
                                    <label class="custom-control-label" for="xl">XL</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" name="ukuran" id="xxl" value="XXL" type="checkbox">
                                    <label class="custom-control-label" for="xxl">XXL</label>
                                </div> -->
                            <!-- <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ukuran" id="exampleRadios1" value="M" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        M
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ukuran" id="exampleRadios2" value="L">
                                    <label class="form-check-label" for="exampleRadios2">
                                        L
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="ukuran" id="exampleRadios3" value="XL">
                                    <label class="form-check-label" for="exampleRadios3">
                                        XL
                                    </label>
                                </div> -->
                            <input class="btn btn-primary" type="submit">
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
<!-- Footer -->
<?php $this->load->view('admin/partials/footer.php'); ?>

<!--   Core   -->
<?php $this->load->view('admin/partials/js.php'); ?>