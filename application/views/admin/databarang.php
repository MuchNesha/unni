<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
  <div class="main-content">
            <!-- Page content -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                <!-- Table -->
                <a class="btn btn-success" href="<?= site_url('admin/databarang/add'); ?>">Tambah Data barang</a>
                <div class="row mt-5">
                    <div class="col">
                        <div class="card bg-default shadow">
                            <div class="card-header bg-transparent border-0">
                                <h3 class="text-white mb-0">Tabel Data barang</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-dark table-flush">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Deskripsi Barang</th>
                                            <th>Gambar Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Grosir Barang</th>
                                            <th>Diskon Barang</th>
                                            <th>Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($barang as $barang) : ?>
                                            <tr>
                                                <td><?php echo $barang->nama_barang ?></td>
                                                <td><?php echo $barang->jenis_barang ?></td>
                                                <td><?php echo $barang->deskripsi_barang ?></td>
                                                <td><?php echo $barang->gambar_barang ?></td>
                                                <td><?php echo $barang->harga_barang ?></td>
                                                <td><?php echo $barang->grosir_barang ?></td>
                                                <td><?php echo $barang->diskon_barang ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('admin/databarang/edit/' . $barang->id_barang) ?>" class="btn btn-small"><i class="fas fa-edit"></i></a>
                                                    <a onclick="deleteConfirm" href="<?php echo site_url('admin/databarang/delete/' . $barang->id_barang) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                <div class="card-footer-dark py-4">
                <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
      <!-- Footer -->
      <?php $this->load->view('admin/partials/footer.php'); ?>
    </div>
  </div>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>