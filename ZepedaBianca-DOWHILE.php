<?php 
$packs = 10;
$price = 2.99;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while BBJ STORE</title>
</head>
<body>
    <?php require_once 'includes/header.php'; ?>
    <h3>Prices for Multiple Packs</h3>
    <p>
        <?php 
        do {
            echo $packs;
            echo ' packs cost $';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        }while ($packs > 0);
        ?>
    </p>
    <?php include 'includes/footer.php'; ?>
</body>
</html>