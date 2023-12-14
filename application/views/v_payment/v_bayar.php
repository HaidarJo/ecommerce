<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tagihan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('asset'); ?>/images/icons/icon_pasar.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset'); ?>/css/main.css">
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
</head>


<body class="animsition">

    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Icon Navigasi -->
                    <?php $this->load->view('navbar'); ?>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $jumlah_keranjang ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div> -->

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class=""></i>
                        </div>

                        <div></div>

                        <a href="<?= base_url('Auth/logout') ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Logout
                        </a>




                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="<?= base_url('asset'); ?>/images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            EN
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            USD
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="<?= base_url('asset'); ?>/images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Keranjang Anda
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <?php foreach ($cart as $key) : ?>
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="<?= base_url('asset'); ?>/images/<?php echo $key['foto_produk'] ?>" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    <?php echo $key['nama_produk'] ?>
                                </a>

                                <span class="header-cart-item-info">
                                    1 x Rp<?php echo $key['harga'] ?>
                                </span>
                            </div>
                        </li>
                    <?php endforeach ?>

                </ul>

                <div class="w-full">
                    <?php foreach ($total_harga as $key) : ?>
                        <div class="header-cart-total w-full p-tb-40">
                            Total: Rp<?php echo $key['total'] ?>
                        </div>
                    <?php endforeach ?>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="<?= base_url('c_cart/index') ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            Lihat Keranjang
                        </a>

                        <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Bayar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shoping Cart -->
    <div class="bg0 p-t-100 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-7 col-xl-20 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <form action="<?= base_url('c_payment/'); ?>" method="post">
                            <!-- <?php foreach ($cart as $key) : ?>
                                <input type="hidden" name="total" value="<?php $total ?>">
                            <?php endforeach ?> -->
                            <h4 class="mtext-109 cl2 p-b-30">
                                Bayar Tagihan
                            </h4>
                            <div class="flex-w flex-t bor12 ">
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        ID Tagihan:
                                    </span>
                                </div>

                                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                    <p class="stext-111 cl6 p-t-2">
                                        <span class="stext-112 cl8">
                                            <?php $counter = 0; ?>
                                            <?php foreach ($tagihan as $id) :  ?>
                                                <?php echo $id['id_tagihan'] ?> <?php $counter++; ?> <?php if ($counter >= 1) break; ?>
                                            <?php endforeach ?>
                                        </span>

                                    </p>


                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Nama Bank:
                                    </span>
                                </div>

                                <div class="size-208">
                                    <span class="stext-112 cl8">
                                        BCA
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Penerima:
                                    </span>
                                </div>

                                <div class="size-208">
                                    <span class="stext-112 cl8">
                                        Pasar Seni Sukawati
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Nomor Rekening:
                                    </span>
                                </div>

                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        772456123
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        Rp<?php $counter = 0; ?>
                                        <?php foreach ($tagihan as $id) :  ?>
                                            <?php echo number_format($id['jumlah_tagihan']) ?> <?php $counter++; ?> <?php if ($counter >= 1) break; ?>
                                        <?php endforeach ?>
                                    </span>
                                </div>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    <span class="stext-112 cl8">
                                    </span>
                                </p>
                                <p class="stext-113 cl6 p-t-2">
                                    *Note : Harap lakukan pembayaran sesuai dengan nominal yang tertera.
                                </p>
                            </div>
                            <br>
                            <br>

                            <button class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Upload Bukti Pembayaran
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------------------- -->





    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="<?= base_url('asset'); ?>/images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="<?= base_url('asset'); ?>/images/icons/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="<?= base_url('asset'); ?>/images/icons/icon-pay-03.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="<?= base_url('asset'); ?>/images/icons/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="<?= base_url('asset'); ?>/images/icons/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('asset'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <script>
        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                $.ajax({
                    url: '<?php echo site_url('c_cart/method'); ?>',
                    type: 'POST',
                    data: {

                        <?php foreach ($cart as $key) : ?>

                            'id_penjual': '<?php echo $key['id_penjual'] ?>',
                            'id_produk': '<?php echo $key['id_produk'] ?>',
                        <?php endforeach ?>
                        // 'jumlah': 'jumlah',

                    },
                    success: function(result) {
                        setTimeout("location.reload(true);", 700);
                        // Lakukan sesuatu dengan result jika diperlukan
                    }
                });
                // swal("Produk", "Dimasukan ke keranjang!", "success");
            });
        });
        $('.js-hapus').each(function() {
            var idKeranjang = $(this).data('id-keranjang');
            $(this).on('click', function() {
                $.ajax({
                    url: '<?php echo site_url('c_cart/hapus_keranjang'); ?>',
                    type: 'POST',
                    data: {

                        'id_keranjang': idKeranjang,

                    },
                    success: function(result) {
                        // swal("Produk", "Dihapus!", "failed");
                        setTimeout("location.reload(true);", 10);
                        // Lakukan sesuatu dengan result jika diperlukan
                    }
                });
                // swal("Produk", "Dimasukan ke keranjang!", "success");
            });
        });
        $('.js-tambah').each(function() {
            var idKeranjang = $(this).data('id-keranjang');
            var idPenjual = $(this).data('id-penjual');
            $(this).on('click', function() {
                $.ajax({
                    url: '<?php echo site_url('c_cart/method'); ?>',
                    type: 'POST',
                    data: {

                        'id_produk': idKeranjang,
                        'id_penjual': idPenjual,

                    },
                    success: function(result) {
                        // swal("Produk", "Dihapus!", "failed");
                        setTimeout("location.reload(true);", 50);
                        // Lakukan sesuatu dengan result jika diperlukan
                    }
                });
                // swal("Produk", "Dimasukan ke keranjang!", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('asset'); ?>/js/main.js"></script>

</body>

</html>