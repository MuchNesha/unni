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
                                <?php // $cart= $this->cart->contents(); ?> 
                                <?php // foreach ($cart as $item) ?>
                                <a href="<?= site_url('belanja/tampil_cart')?>" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?php  //echo $item['qty']; ?></span> <i class="ti-bag"></i> Total Belanja Anda</color></a>
                            </div>
                            <div class="header-right-side-menu ml-15">
                                </i>
                                <font color=red> Rp.<?php // echo number_format($item['subtotal'],0,",","."); ?> </color>
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