<div class="container">
    <div class="row  pt-2 pb-2">
        <div class="col-md-2 pt-6 text-center">
        <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('keranjang'); ?>'">1</button>
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

                            <div class="row" y
                            <div class="cart-page-heading">
                                <h2>DATA DAN ALAMAT PENERIMA</h2>
                                <p>Isikan data identitas alamat dengan benar agar mempermudah saat rekap ngiriman!</p>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">Nama Lengkap <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Provinsi <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company">Nomor HP</label>
                                        <input type="number" class="form-control" id="company" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="street_address">Kota/Kabupaten <span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="street_address" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postcode">Email <span>*</span></label>
                                        <input type="email" class="form-control" id="postcode" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">Kecamatan <span>*</span></label>
                                        <input type="text" class="form-control" id="city" value="">
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <label for="state">Catatan Pengiriman <span>*</span></label>
                                        <input type="text" class="form-control" id="state" value="">
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <label for="phone_number">Kode Pos <span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="">
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