<?php 
$stock = 9;
if ($stock >= 10) {
    $message = 'Available';
} else if ($stock > 0 && $stock < 10) {
    $message = 'Low stock';
} else if ($stock == 0) {
    $message = 'Out of stock';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBJ Store</title>
    <style>
        h2, p {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require_once 'includes/header.php'; ?>
    <h2>Brownies</h2>
    <p><?= $message ?></p>
    <?php include 'includes/footer.php'; ?>
</body>
</html>