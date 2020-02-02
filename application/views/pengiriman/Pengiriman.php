<div class="container">
    <div class="row  pt-2 pb-2">
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('belanja/tampil_cart'); ?>'">1</button>
            <a class="text-center" href="<?= site_url('keranjang'); ?>"><br><br>KERANJANG BELANJA</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('pengiriman'); ?>'">2</button>
            <a class="text-center" href="<?= site_url('pengiriman'); ?>"><br><br><b>PENGIRIMAN</b></a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('pembayaran'); ?>'">3</button>
            <a class="text-center" href="<?= site_url('pembayaran'); ?>"><br>PEMBAYARAN</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 float-right text-center">
            <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('konfirmasi'); ?>'">4</button>
            <a class="text-center" href="<?= site_url('konfirmasi'); ?>"><br>KONFIRMASI</a>
        </div>
    </div>
    <br>
    <!-- ****** Checkout Area Start ****** -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="md-6 ml-auto">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="row">
                            <div class="cart-page-heading">
                                <h2>DATA DAN ALAMAT PENERIMA</h2>
                                <p>Isikan data identitas alamat dengan benar agar mempermudah saat rekap ngiriman!</p>
                            </div>

                            <form action="<?php echo base_url('pengiriman/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">Nama Lengkap <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="nama_pelanggan" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Provinsi <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="provinsi" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company">Nomor HP</label>
                                        <input type="number" class="form-control" id="company" name="no_hp_pelanggan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="street_address">Kota/Kabupaten <span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="street_address" name="kabupaten">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postcode">Email <span>*</span></label>
                                        <input type="email" class="form-control" id="postcode" name="email_pelanggan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">Kecamatan <span>*</span></label>
                                        <input type="text" class="form-control" id="city" name="kecamatan">
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <label for="state">Alamat <span>*</span></label>
                                        <input type="text" class="form-control" id="state" name="alamat">
                                    </div>
                                    <div class=" col-md-6 mb-5">
                                        <label for="phone_number">Kode Pos <span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" min="0" name="kode_pos">
                                    </div>
                                    <div class="col-3 mb-5">
                                        <button class="btn karl-checkout-btn" type="submit">Lanjut ke Pembayaran</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->
    </div>
</div>