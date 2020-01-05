<!DOCTYPE html>
<html lang="en">


<body>
   
    <div id="wrapper">

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
<br><br>
        <div class="container">
            <div class="row  pt-2 pb-2">
                <div class="col-3 md-3 pt-6 text-center">
                    <button type="button" class="btn btn-danger">1</button>
                    <a class="text-center" href="<?= site_url('keranjang'); ?>">keranjang belanja</a>
                </div>
                <div class="col-3 md-4 pt-6 text-center">
                     <button type="button" class="btn btn-danger">2</button>
                     <a class="text-center" href="<?= site_url('pengiriman'); ?>">pengiriman</a>
                </div>
                <div class="col-3 md-4 pt-6 text-center">
                    <button type="button" class="btn btn-danger">3</button>
                    <a class="text-center" href="<?= site_url('pembayaran'); ?>">pembayaran</a>
                </div>
                <div class="col-3 md-3 pt-6 float-right text-center">
                    <button type="button" class="btn btn-danger">4</button>
                    <a class="text-center" href="<?= site_url('konfirmasi'); ?>">konfirmasi</a>
                </div>
            </div>

        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="img/product-img/product-9.jpg" alt="Product"></a>
                                            <h6>Yellow Cocktail Dress</h6>
                                        </td>
                                        <td class="price"><span>$49.88</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </td>
                                        <td class="total_price"><span>$49.88</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="shop-grid-left-sidebar.html">Continue shooping</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="#">clear cart</a>
                                <a href="#">Update cart</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                       
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Shipping method</h5>
                                <p>Select the one you want</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <a href="checkout.html" class="btn karl-checkout-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        
        <!-- ****** Footer Area End ****** -->
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