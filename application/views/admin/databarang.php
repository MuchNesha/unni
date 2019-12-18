<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
  <div class="main-content">
            <!-- Page content -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
      <!-- Table -->
    <a class="btn btn-success" href="<?= site_url('admin/databarang/add'); ?>">Tambah Data </a>
    <br>
    <br>
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Daftar Barang</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>                    
                    <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Harga Barang</th>
                      <th>Sisa Stock</th>
                      <th>Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($barang as $barang) : ?>
                                            <tr>
                                                <td><?php echo $barang->nama_barang ?></td>
                                                <td><?php echo $barang->jenis_barang ?></td>
                                                <td><?php echo $barang->harga_barang ?></td>
                                                <td><?php echo $barang->Stock ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('admin/databarang/edit/' . $barang->id_barang) ?>">
                                                    <button type="submit" class="btn btn-primary" >Edit/Rincian</button></a>
                                                    <a href="<?php echo site_url('admin/databarang/delete/' . $barang->id_barang) ?>">
                                                    <button type="submit" class="btn btn-danger" >Hapus</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                <div class="card-footer py-4">
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
      <!-- Footer -->
      <?php $this->load->view('admin/partials/footer.php'); ?>
    </div>
  </div>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>