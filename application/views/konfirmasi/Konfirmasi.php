<div class="container">
    <div class="row  pt-2 pb-2">
        <div class="col-md-2 pt-6 text-center">
        <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('keranjang'); ?>'">1</button>
            <a class="text-center" href="<?= site_url('keranjang'); ?>"><br><br>KERANJANG BELANJA</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
        <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('pengiriman'); ?>'">2</button>
            <a class="text-center" href="<?= site_url('pengiriman'); ?>"><br><br>PENGIRIMAN</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('pembayaran'); ?>'">3</button>
            <a class="text-center" href="<?= site_url('pembayaran'); ?>"><br><br>PEMBAYARAN</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 float-right text-center">
            <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('konfirmasi'); ?>'">4</button>
            <a class="text-center" href="<?= site_url('konfirmasi'); ?>"><br><br><b>KONFIRMASI</</a>
        </div>
    </div>
    <br>
        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="row" y
                            <div class="cart-page-heading">
                                <h3>Silahkan isi data</h3>
                                <p>Setelah transfer uang, isi ID pesanan dan konfirmasi transfer tadi agar barang belanjaan anda segera di proses dan dikirim</p>
                            </div>

                            <form action="<?php echo base_url('konformasi/add') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama">ID Pesanan <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company">Tanggal Bayar</label>
                                        <input type="date" class="form-control" id="company" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postcode">Jumlah Bayar <span>*</span></label>
                                        <input type="number" class="form-control" id="postcode" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="country">Metode Pembayaran <span>*</span></label>
                                        <select class="custom-select d-block w-100" id="country">
                                        <option value="transfer">Transfer ATM</option>
                                        <option value="lain">Lain</option>
                                    </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state">Dari Bank <span>*</span></label>
                                        <input type="text" class="form-control" id="state" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number">Nama Pemilik Rekening <span>*</span></label>
                                        <input type="text" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="k">Unggah Bukti struk <span>*</span></label>
                                        <input type="file" class="form-control" id="email_address" value="">
                                    </div>

                                    
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        
    </div>
    <!-- /.wrapper end -->
