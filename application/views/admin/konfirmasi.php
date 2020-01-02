<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">

    <!--Session -->
      <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>

        <div class="header-body">
          <!-- Card stats -->
         <h1 style="color:aliceblue">Pemesanan Belum Dikonfirmasi</h1>
         <br>
         <h3 style="color:aliceblue">Admin bisa menyetujui pesanan yang belum dikonfirmasi 🙂</h3>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Belum Dikonfirmasi</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID Pesanan</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Rincian</th>
                    <th scope="col">Keputusan</th>
                  </tr>
                </thead>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rincian ID Pesanan : </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                      <?php foreach ($konfirmasi as $row) : ?>
                      <b> <h3>1. Info Transfer</h3> <br> </b>
                      <h4>ID Pesanan :</h4>
                        <h5><?php echo $row->id_pesanan ?></h5>
                      <h4>Tanggal :</h4>
                        <h5><?php echo $row->tgl_bayar ?></h5>
                      <h4>Jumlah Bayar :</h4>
                        <h5><?php echo $row->jumlah_bayar ?></h5>
                      <h4>Metode Pembayaran :</h4>
                        <h5><?php echo $row->metode_pembayaran ?></h5>
                      <h4>Dari Bank :</h4>
                        <h5><?php echo $row->dari_bank ?></h5>
                      <h4>Nama Pemilik Rekening :</h4>
                        <h5><?php echo $row->nama_pemilik_rekening ?></h5>
                        <?php endforeach; ?>

                      <?php foreach ($pelanggan as $pelanggan) : ?>
                      <br> <h3>2. Info Pemesan</h3>
                      <h4>Nama Lengkap Pemesan :</h4>
                        <h5><?php echo $pelanggan->nama_pelanggan ?></h5>
                      <h4>No Hp :</h4>
                        <h5><?php echo $pelanggan->no_hp_pelanggan ?></h5>
                      <h4>Email :</h4>
                        <h5><?php echo $pelanggan->email_pelanggan ?></h5>
                      <h4>Alamat :</h4>
                        <h5><?php echo $pelanggan->alamat ?></h5>
                      <h4>Provinsi :</h4>
                        <h5><?php echo $pelanggan->provinsi ?></h5>
                      <h4>Kota/Kab :</h4>
                        <h5><?php echo $pelanggan->kabupaten ?></h5>
                      <h4>Kecamatan :</h4>
                        <h5><?php echo $pelanggan->kecamatan ?></h5>
                        <?php endforeach; ?>

                      <h4>Harga Ongkir :</h4>
                        <h5>$var</h5>
                      
                      <?php foreach ($konfirmasi as $bukti) : ?>
                      <br> <h3>3. Foto Bukti Transfer :</h3>
                      <h5><?php echo $bukti->gambar_bukti ?></h5>
                      <?php endforeach; ?>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Setujui</button>
                      </div>
                    </div>
                  </div>
                </div>
                <tbody>
                <?php foreach ($konfirmasi as $konfirmasi) : ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">
                          <?php echo $konfirmasi->id_pesanan ?>
                          </span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <span class="mb-0 text-sm">
                    <?php echo $konfirmasi->tgl_bayar ?>
                    </span>
                    </td>
                    <td>
                      <span class="mb-0 text-sm">
                      <?php echo $konfirmasi->jumlah_bayar ?>
                      </span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Rincian</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary">Setujui</button>
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
      <br> <br>
    </div>
    <!-- Footer -->
      <?php $this->load->view('admin/partials/footer.php'); ?>
  <!--   Core   -->
  <?php $this->load->view('admin/partials/js.php'); ?>
