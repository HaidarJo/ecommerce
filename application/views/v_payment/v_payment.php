<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../asset/images/icons/icon_pasar.png" />
    <link rel="stylesheet" type="text/css" href="../asset/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../asset/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/main.css">
    <style>
        body {
            background-color: #f2f2f2;
            padding: 20px;
        }

        .alert {
            padding: 20px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 8px;
            display: block;
        }

        input[type="datetime-local"],
        input[type="text"],
        input[type="file"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body class="animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
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
            </div>
        </div>
    </div>

    <script src="../asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../asset/vendor/animsition/js/animsition.min.js"></script>
    <script src="../asset/vendor/bootstrap/js/popper.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../asset/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <script src="../asset/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="../asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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
    <script src="../asset/js/main.js"></script>

</body>

</html>