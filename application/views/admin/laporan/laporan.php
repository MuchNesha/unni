<?php $this->load->view('admin/partials/head.php'); ?>
<?php $this->load->view('admin/partials/menu.php'); ?>
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
                    <label>Filter Berdasarkan</label><br>
                    <select name="filter" id="filter">
                        <option value="">Pilih</option>
                        <option value="1">Per Tanggal</option>
                        <option value="2">Per Bulan</option>
                        <option value="3">Per Tahun</option>
                    </select>
                    <br /><br />

                    <div id="form-tanggal">
                        <label>Tanggal</label><br>
                        <input type="text" name="tanggal" class="input-tanggal" />
                        <br /><br />
                    </div>

                    <div id="form-bulan">
                        <label>Bulan</label><br>
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
                        <label>Tahun</label><br>
                        <select name="tahun">
                            <option value="">Pilih</option>
                            <?php
                            // // foreach ($option_tahun as $data) { // Ambil data tahun dari model yang dikirim dari controller
                            // //     echo '<option value="' . $data->tahun . '">' . $data->tahun . '</option>';
                            // }
                            // 
                            ?>
                        </select>
                        <br /><br />
                    </div>

                    <button type="submit">Tampilkan</button>
                    <!-- <a href="<?php echo base_url(); ?>">Reset Filter</a> -->
                </form>
                <hr />

                <!-- <b><?php echo $ket; ?></b><br /><br /> -->
                <!-- <a href="<?php echo $url_cetak; ?>">CETAK PDF</a><br /><br /> -->
                <!-- Table -->
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <h3 class="mb-0">List Barang</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Kode Transaksi</th>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <?php foreach ($barang as $barang) : ?> -->
                                        <tr>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>

                                            <td>
                                                <a href="<?php echo site_url('admin/databarang/edit/' . $barang->id_barang) ?>">
                                                    <button type="submit" class="btn btn-primary">Edit/Rincian</button></a>
                                                <a href="<?php echo site_url('admin/databarang/delete/' . $barang->id_barang) ?>">
                                                    <button type="submit" class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                        <!-- <?php endforeach; ?> -->
                                    </tbody>


                                    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
                                    <script>
                                        $(document).ready(function() { // Ketika halaman selesai di load
                                            $('.input-tanggal').datepicker({
                                                dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
                                            });

                                            $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

                                            $('#filter').change(function() { // Ketika user memilih filter
                                                if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
                                                    $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                                                    $('#form-tanggal').show(); // Tampilkan form tanggal
                                                } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
                                                    $('#form-tanggal').hide(); // Sembunyikan form tanggal
                                                    $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
                                                } else { // Jika filternya 3 (per tahun)
                                                    $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                                                    $('#form-tahun').show(); // Tampilkan form tahun
                                                }

                                                $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
                                            })
                                        })
                                    </script>
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