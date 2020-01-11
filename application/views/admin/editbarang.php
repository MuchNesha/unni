<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
<div class="main-content">
    <!-- Page content -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <h1 style="color:aliceblue">Edit Barang</h1>
                <br>
                <h3 style="color:aliceblue">Admin bisa mengedit barang dihalaman ini 😉</h3>
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
                        <form action="<?php echo base_url('admin/databarang/editdata') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_barang">Nama Barang</label>
                                        <input class="form-control" type="hidden" name="id_barang" value="<?php echo $barang->id_barang ?>" />
                                        <input class="form-control" type="text" name="nama_barang" value="<?php echo $barang->nama_barang ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form-control">Pilih kategori Barang</label>
                                        <select class="form-control" name="id_jenis" id="kategoribarang">
                                            <option value="">Kategori Barang</option>
                                            <?php
                                            foreach ($kategori as $grup) { ?>
                                                <option <?php if ($grup->id_jenis == $barang->id_jenis) {
                                                            echo 'selected="selected"';
                                                        } ?> value="<?php echo $grup->id_jenis ?>"><?php echo $grup->nama_jenis ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Harga Barang</label>
                                        <input class="form-control" type="text" name="harga_brg" value="<?php echo $barang->harga_barang ?>" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="grosir">Harga Grosir</label>
                                        <input class="form-control" type="text" name="grosir_barang" value="<?php echo $barang->grosir_barang ?>" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="per">Per</label>
                                        <input class="form-control" type="text" name="per" value="<?php echo $barang->per ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gambar">Gambar Barang</label>
                                        <input class="form-control" type="file" name="gambar" placeholder="Gambar Barang" value="<?php echo $barang->gambar ?>" />
                                    </div>
                                </div>
                                <div class=" col-3">
                                    <div class="form-group">
                                        <label for="stock">Stock Barang</label>
                                        <input class="form-control" type="text" name="stok" placeholder="Harga" value="<?php echo $barang->stok ?>" />
                                    </div>
                                </div>
                                <div class=" col-3">
                                    <div class="form-group">
                                        <label for="diskon">Diskon</label>
                                        <input class="form-control" type="text" name="diskon_barang" placeholder="%" value="<?php echo $barang->diskon_barang ?>" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Barang</label>
                                        <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" value="<?php echo $barang->deskripsi_barang ?>" />
                                    </div>
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
                            <!-- <div class="col-md-3">
                                <label>Ukuran yang Tersedia</label>
                                <div class="form-check">
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
                            <button class="btn btn-primary" type="submit">Ubah</button>
                    </div>
                </div>



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