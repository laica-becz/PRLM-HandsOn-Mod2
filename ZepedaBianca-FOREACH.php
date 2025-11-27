<?php
$products = [
    'Toffee' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 1.49,
    'Cookies' => 2.50,
    'Sour Candy' => 2.25,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach BBJ STORE</title>
</head>
<body>
    <?php require_once 'includes/header.php'; ?>
    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $price ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php include 'includes/footer.php'; ?>
</body>
</html>