<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
<div class="main-content">
    <!-- Page content -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <h1 style="color:aliceblue">Laporan Barang </h1>
                <br>
                <h3 style="color:aliceblue">Admin bisa melihat laporan penjualan barang🙂</h3>
                <br> <br>

                <form method="get" action="">
                    <label style="color:aliceblue">Filter Berdasarkan</label><br>
                    <select name="filter" id="filter">
                        <option value="">Pilih</option>
                        <option value="1">Per Tanggal</option>
                        <option value="2">Per Bulan</option>
                        <option value="3">Per Tahun</option>
                    </select>
                    <br /><br />

                    <div id="form-tanggal">
                        <label style="color:aliceblue">Tanggal</label><br>
                        <input type="text" name="tanggal" class="input-tanggal" />
                        <br /><br />
                    </div>

                    <div id="form-bulan">
                        <label style="color:aliceblue">Bulan</label><br>
                        <select name="bulan">
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <br /><br />
                    </div>

                    <div id="form-tahun">
                        <label style="color:aliceblue">Tahun</label><br>
                        <select name="tahun">
                            <option value="">Pilih</option>
                            <?php
                            foreach ($option_tahun as $data) { // Ambil data tahun dari model yang dikirim dari controller
                                echo '<option value="' . $data->tahun . '">' . $data->tahun . '</option>';
                            }
                            ?>
                        </select>
                        <br /><br />
                    </div>

                    <button class="btn btn-primary" type="submit">Tampilkan</button>
                    <a href="<?php echo base_url('admin/laporan'); ?>">Reset Filter</a>
                </form>
                <hr />

                <b style="color:aliceblue"><?php echo $ket; ?></b><br /><br />
                <a href="<?php echo $url_cetak; ?>">CETAK PDF</a><br /><br />

                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <h3 class="mb-0">List Data</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Kode Transaksi</th>
                                            <th>harga total</th>
                                            <th>berat total</th>
                                            <th>catatan pengiriman</th>
                                            <th>status pemesanan</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($transaksi)) {
                                            $no = 1;
                                            foreach ($transaksi as $data) {
                                                $tanggal = date('d-m-Y', strtotime($data->tanggal));

                                                echo "<tr>";
                                                echo "<td>" . $tanggal . "</td>";
                                                echo "<td>" . $data->id_transaksi . "</td>";
                                                echo "<td>" . $data->harga_total . "</td>";
                                                echo "<td>" . $data->berat_total . "</td>";
                                                echo "<td>" . $data->catatan_pengiriman . "</td>";
                                                echo "<td>" . $data->status_pemesanan . "</td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        }
                                        ?>
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