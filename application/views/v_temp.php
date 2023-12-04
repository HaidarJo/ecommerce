<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan</title>
</head>

<body>
    <?php echo $hasil->rajaongkir->origin_details->city_name ?> <br>
    <?php echo $hasil->rajaongkir->query->courier ?> <br>
    <?php $counter = 0; ?>
    <?php foreach ($hasil->rajaongkir->results[0]->costs as $ongkir) : ?><br>
        <?php echo $ongkir->service ?> : <?php echo $ongkir->cost[0]->value ?> <?php echo $ongkir->cost[0]->etd ?>
        <?php $counter++; ?>
        <?php if ($counter >= 1) break; ?>

    <?php endforeach ?>
    <?php ?>

</body>

</html>