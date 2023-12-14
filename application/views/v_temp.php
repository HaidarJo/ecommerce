<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan</title>
</head>

<body>
    <div class="">

        <?php $counter = 0; ?>
        <?php foreach ($cekStatus as $id) :  ?>
            <?php echo ($id_tagihan = $id['id_tagihan']) ?>
            <?php echo ($id['status']) ?>
            <?php $counter++; ?> <?php if ($counter >= 1) break; ?>
        <?php endforeach ?>

    </div>

</body>

</html>