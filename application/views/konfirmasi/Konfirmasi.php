<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Unni Korean - Fashion</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/responsive.css" rel="stylesheet">

</head>
<!-- ****** Header Area Start ****** -->
<header class="header_area">
    <!-- Top Header Area Start -->
    <div class="top_header_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">

                <div class="col-12 col-lg-7">
                    <div class="top_single_area d-flex align-items-center">
                        <!-- Logo Area --
                        <div class="top_logo">
                            <a href="#"><img src="<?php echo base_url(); ?>/assets/img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- Cart & Menu Area -->
                        <div class="header-cart-menu d-flex align-items-center ml-auto">
                            <!-- Cart Area -->
                            <div class="cart">
                                <?php // $cart= $this->cart->contents(); 
                                ?>
                                <?php // foreach ($cart as $item) 
                                ?>
                                <a href="<?= site_url('belanja/tampil_cart') ?>" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?php  //echo $item['qty']; 
                                                                                                                                                    ?></span> <i class="ti-bag"></i> Total Belanja Anda</color></a>
                            </div>
                            <div class="header-right-side-menu ml-15">
                                </i>
                                <font color=red> Rp.<?php // echo number_format($item['subtotal'],0,",","."); 
                                                    ?> </color>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Top Header Area End -->
    <div class="main_header_area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 d-md-flex justify-content-between">
                    <!-- Header Social Area -->
                    <div class="header-social-area">
                        <a href="#"><span class="karl-level">Bagikan</span> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                    <!-- Menu Area -->
                    <div class="main-menu-area">
                        <nav class="navbar navbar-expand-lg align-items-start">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                            <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="<?= site_url(''); ?>">Beranda</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Belanja</a>
                                        <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                            <a class="dropdown-item" href="<?= site_url('belanja/index'); ?>">Semua</a>
                                            <a class="dropdown-item" href="<?= site_url('list_barang'); ?>">Hijab Instan</a>
                                            <a class="dropdown-item" href="#">Hijab Segiempat</a>
                                            <a class="dropdown-item" href="#">Baju Muslim</a>
                                            <a class="dropdown-item" href="#">Aksesoris</a>
                                            <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
                                                <div class="container">
                                                    <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            < class="icon-bar"></span>
                                                        </button>
                                                        <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/logos.png"></a>
                                                    </div>
                                                    <div id="navbar" class="collapse navbar-collapse">
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li><a href="<?php echo base_url() ?>belanja/tampil_cart"><i class="glyphicon glyphicon-belanja-cart"></i> Keranjang Belanja</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/.nav-collapse -->
                                                </div>
                                            </nav>

                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="<?= site_url('konfirmasi'); ?>">Konfirmasi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= site_url('tentangkami'); ?>">Tentang</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= site_url('kontakkami'); ?>">Kontak</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Help Line -->
                    <div class="help-line">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ****** Header Area End ****** -->
<div class="container">
    <div class="row  pt-2 pb-2">
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('belanja/tampil_cart'); ?>'">1</button>
            <a class="text-center" href="<?= site_url('belanja/keranjang'); ?>"><br><br>KERANJANG BELANJA</a>
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
            <a class="text-center" href="<?= site_url('konfirmasi'); ?>"><br><br><b>KONFIRMASI</b></a>
        </div>
    </div>
    <br>
    <!-- ****** Checkout Area Start ****** -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-12 md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="row">
                            <div class="cart-page-heading">
                                <h3>Silahkan isi data</h3>
                                <p>Setelah transfer uang, isi ID pesanan dan konfirmasi transfer tadi agar barang belanjaan anda segera di proses dan dikirim</p>
                            </div>

                            <form action="<?php echo base_url('konfirmasi/add') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama">ID Pesanan <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" name="id_pesanan" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company">Tanggal Bayar</label>
                                        <input type="date" class="form-control" id="company" name="tgl_bayar">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postcode">Jumlah Bayar <span>*</span></label>
                                        <input type="number" class="form-control" id="postcode" name="jumlah_bayar">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Metode Pembayaran <span>*</span></label>
                                        <select class="custom-select d-block w-100" name="metode_pembayaran">
                                            <option name="metode_pembayaran" value="transfer ">Transfer ATM</option>
                                            <option name="metode_pembayaran" value="lain">Lain</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state">Dari Bank <span>*</span></label>
                                        <input type="text" class="form-control" id="state" name="dari_bank">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number">Nama Pemilik Rekening <span>*</span></label>
                                        <input type="text" class="form-control" id="phone_number" min="0" name="nama_pemilik_rekening">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="k">Unggah Bukti struk <span>*</span></label>
                                        <input class="form-control" type="file" name="gambar_bukti" />
                                    </div>
                                    <div class="col-3 mb-5">
                                        <button class="btn karl-checkout-btn" type="submit">konfirmasi</button>
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

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>