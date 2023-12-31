<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
    <?php foreach ($data as $key) : ?>
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="../asset/images/<?php echo $key['foto_produk'] ?>" alt="IMG-PRODUCT">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Lihat Produk
                </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        <?php echo $key['$nama_produk'] ?>
                    </a>

                    <span class="stext-105 cl3">
                        Rp<?php echo $key['harga'] ?>,00
                    </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        <img class="../asset/icon-heart1 dis-block trans-04" src="../asset/images/icons/icon-heart-01.png" alt="ICON">
                        <img class="../asset/icon-heart2 dis-block trans-04 ab-t-l" src="../asset/images/icons/icon-heart-02.png" alt="ICON">
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>


<!-- login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bde1ebf728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/signup.css'); ?>">
    <!--end of bootstrap 5-->
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-image: url("<?php echo base_url('asset/1.jpg'); ?>");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>


<body>
    <div class="login">
        <a href="<?php echo base_url('guest/home') ?>"><button type="button" class="btn-close" disabled aria-label="Close"></button></a>
        <h1 class="text-center">Login</h1>
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger text-center"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
        <form action="<?php echo base_url('auth') ?>" method="post">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input name="email" class="form-control" type="email" id="email" placeholder="Email">
                <h6 class="text-danger"><?php echo form_error('email') ?></h6>
            </div>
            <div class="form-group">
                <label class="form-label" for="Password">Password</label>
                <input name="password" class="form-control" type="password" id="password" placeholder="password">
                <h6 class="text-danger"><?php echo form_error('password') ?></h6>
            </div>
            <div style="text-align:right;">
                <pre style=" font-family:roboto; font-size:13px;">Lupa Password?<a href="https://wa.me/6288987455175" target="blank"> <ion-icon name="mail-outline" class="text-gray-600"></ion-icon> Hubungi Admin      </pre>
                <br>
                <br>
                </a>

            </div>
            <div class="register">
                <center>
                    <p>Belum punya akun? <a href="<?php echo base_url('auth/signup') ?>"> daftar disini!</a></p>
                </center>
            </div>

            <input class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<!-- login -->

<!-- register -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bde1ebf728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/signup.css'); ?>">
    <!--end of bootstrap 5-->
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-image: url("<?php echo base_url('asset/1.jpg'); ?>");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="login">
        <a href="<?php echo base_url('guest/home') ?>"><button type="button" class="btn-close" disabled aria-label="Close"></button></a>
        <h1 class="text-center">Sign Up</h1>
        <form action="<?php echo base_url('auth/signup') ?>" method="post">
            <div class="form-group">
                <label class="form-label" for="name">Name</label>
                <input name="name" class="form-control" type="text" id="name" placeholder="Name">
                <h6 class="text-danger"><?php echo form_error('name') ?></h6>
            </div>
            <!-- <div class="form-group">
                <label class="form-label" for="email">Date of birth</label>
                <input name="date" class="form-control" type="date" id="date">
                <h6 class="text-danger"><?php echo form_error('date') ?></h6>
            </div>
            <div class="row">
                <div class="col">
                    <p>Gender : </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gen" value="laki-laki">
                        <label class="form-check-label" for="inlineRadio1">Male</label><br>
                        <input class="form-check-input" type="radio" name="gen" value="perempuan">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <h6 class="text-danger ms-2"><?php echo form_error('gen') ?></h6>
            </div> -->
            <div class="form-group">
                <label class="form-label" style="margin-top: 20px;" for="email">Email</label>
                <input name="email" class="form-control" type="email" id="email" placeholder="Email@gmail.com">
            </div>
            <div class="form-group">
                <label class="form-label" for="Password">Password </label>
                <input name="password" class="form-control" type="password" id="password" placeholder="Password">
                <h6 class="text-danger"><?php echo form_error('password') ?></h6>
            </div>
            <div class="register">
                <center>
                    <p>Sudah punya akun? <a href="<?php echo base_url('auth') ?>">login disini!</a></p>
                </center>
            </div>
            <input class="btn btn-primary" type="submit" value="Sign Up">
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<!-- register -->
<!-- ------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------- -->
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: your-api-key"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}


<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php } ?>
<h1>Form Pembayaran</h1>
<?php echo form_open_multipart('c_payment/save_payment'); ?>
<div class="form-group">
    <label for="tgl_pembayaran">Tanggal dan Jam Pembayaran</label>
    <input type="datetime-local" id="tgl_pembayaran" name="tgl_pembayaran" class="form-control" required>
</div>
<div class="form-group">
    <label for="id_tagihan">ID Tagihan</label>
    <input type="text" id="id_tagihan" name="id_tagihan" class="form-control" required>
</div>
<div class="form-group">
    <label for="bukti_pembayaran">Bukti Pembayaran</label>
    <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" class="form-control" required>
</div>
<input type="submit" value="Simpan" class="btn btn-primary">
<?php echo form_close(); ?>