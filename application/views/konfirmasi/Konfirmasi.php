<body>
    
    <div id="wrapper">

        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
        </section>

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

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>