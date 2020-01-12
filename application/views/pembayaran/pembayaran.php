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
            <a class="text-center" href="<?= site_url('pembayaran'); ?>"><br><br><b>PEMBAYARAN</b></a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 float-right text-center">
            <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('konfirmasi'); ?>'">4</button>
            <a class="text-center" href="<?= site_url('konfirmasi'); ?>"><br>KONFIRMASI</a>
        </div>
    </div>
    <br>


        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-page-heading">
                            <h2 style="color:grey;">LANGKAH 1 -</h2><h3> ID PESANAN ANDA</h3>
                            <p>Catat atau screenshoot ID Pesanan ini untuk keperluan konfirmasi pembayaran nanti</p>
                            <br><br>
                            <h3 style="color:red;">112-112</h3>
                        </div>

                        <div class="cart-page-heading">
                            <h2 style="color:grey;">LANGKAH 2 -</h2><h3> RINCIAN BELANJA DAN ALAMAT PENGIRIMAN</h3>
                            <p>Silahkan periksa kembali barang belanjaan Anda dan alamat penerima</p>
                        </div>
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
                <br><br>
                    <div class="cart-page-heading">
                        <h3>DATA DAN ALAMAT PENERIMA</h3>
                        <p>Jika terdapat kesalahan klik tombol Edit</p>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h5>Nama Lengkap</h5>
                                <p>gfgf</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Provinsi</h5>
                                <p>dkdkd</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Nomor Handphone</h5>
                                <p>0101029</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Kota/Kabupaten</h5>
                                <p>jjjfjfjff</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Email</h5>
                                <p>pppppp@ggg.com</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Kecamatan</h5>
                                <p>Ammbbb</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Catatan Pengiriman</h5>
                                <p>jsdsjdfskdhjbfshjdhjdbhjs</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Kode Pos</h5>
                                <p>511441</p>
                            </div>
                            <div class="col-md-2 lg-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Launch demo modal
                            </button>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cart-page-heading">
                            <h2 style="color:grey;">LANGKAH 3 -</h2><h3> SYARAT DAN KETENTUAN</h3>
                            <p><b>Sebelum melakukan transfer baca dengan saksama</b></p>
                            <br>
                            <p>1. Barang yang sudah dibeli atau sudah ditransfer tidak dapat dikembalikan kecuali ada kecacatan produk.</p>
                            <p>2. Jika konfirmasi Pembayaran dilakukan diluar jam kerja (08:00 - 16:00, Senin - Sabtu) maka barang akan dikirimkan keesokan harinya.</p>
                            <p>3. Harap mengisi data identitas dan alamat yang benar. Hal tersebut akan memudahkan kurir dan mengirimkan barang dengan cepat.</p>
                        </div>
                    <div class="cart-page-heading">
                            <h2 style="color:grey;">LANGKAH 4 -</h2><h3> TRANSFER</h3>
                            <P>Silahkan transfer sejumlah uang yang telah tertera pada Total pada rekening berikut :</P>
                            <br>
                            <p>No Rekening :</p> <p><b>51651651</b></p>
                            <br>
                            <p>Atas Nama :</p> <p><b>Siapa Saja</b></p>
                            <br>
                            <p>Bank :</p> <p><b>Mandi Sendiri</b></p>
                        </div> 
            </div>
        </div>
        
        <!-- ****** Cart Area End ****** -->
</div>
