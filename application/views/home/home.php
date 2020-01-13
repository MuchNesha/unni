        <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Bebas Ongkir</h5>
                <h6><a href="#">Untuk Wilayah Bondowoso</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Dapatkan Diskon 50%</h5>
                <h6>Selama Bulan Ramadhan</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Dapatkan Diskon 20%</h5>
                <h6>Untuk Mukena</h6>
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">Baru</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Hijab Trending</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Lihat Koleksi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-3.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">Hanya Hanya Ada Di SIni</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Koleksi Terbaru</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Lihat Koleksi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">Gratis Ongkir untuk pengguna baru</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Fashion Wanita</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Lihat Koleksi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-2.jpg);">
                <div class="catagory-content">
                    <h6></h6>
                    <h2>BELANJA SEKARANG</h2>
                    <a href="#" class="btn karl-btn">Lihat Koleksi</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>Selama Ramadhan</h6>
                    <h2>Diskon 50%</h2>
                    <a href="#" class="btn karl-btn">Lihat Koleksi</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->


        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Koleksi Trending Hijab</h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->
                    <?php foreach ($brg as $b) : ?>
                        <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?php echo base_url('assets/upload/produk/' . $b->gambar); ?>" alt="">
                                <div class="product-quicview">
                                    <a href="" data-toggle="modal" data-target="#quickview<?= $b->id_barang ?>"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">Rp. <?= $b->harga_barang ?></h4>
                                <p><?= $b->nama_barang ?></p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php foreach ($barang as $row) : ?>
            <!-- ****** Quick View Modal Area Start ****** -->
            <div class="modal fade" id="quickview<?= $row->id_barang ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="modal-body" id="exampleModal<?= $row->id_barang ?>">
                            <div class="quickview_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="quickview_pro_img">
                                                <img src="<?php echo base_url('assets/upload/produk/' . $row->gambar) ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="quickview_pro_des">
                                                <h4 class="title"><?php echo $row->nama_barang ?></h4>
                                                <h5 class="price">Rp. <?php echo $row->harga_barang ?></h5>
                                                <p><?php echo $row->deskripsi_barang ?></p>
                                                <a href="<?php echo site_url('detailproduk/index/' . $row->id_barang) ?>">View Full Product Details</a>
                                            </div>
                                            <!-- Add to Cart Form -->
                                            <form class="cart" method="post">
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                                <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-5.jpg);">
        </section>
        <!-- ****** Offer Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg-img/bg-6.jpg);">
        </section>
        <!-- ****** Offer Area End ****** -->
        <!-- Footer Bottom Area Start -->
        </div>
        <!-- /.wrapper end -->

        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>
        <!-- Active js -->
        <script src="<?php echo base_url(); ?>/assets/js/active.js"></script>

        </body>

        </html>