<?php 
$items = 5;
$greetings = "Welcome dear Customer!";
if ($items == 2) {
    $message = "You get one free item!";
} else if ($items == 3) {
    $message = "You get two free items!";
} else if ($items == 4) {
    $message = "You get three free items";
} else {
    $message = "You have a free giftcard and three goodies of your choice!";
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifelseif BBJ STORE</title>
    <style>
        body {
            margin: 0;
            background-color: #C19A6B;
            line-height: 1.6;
            background-image: url()
        }
        header {
            background-color: #e0b070;
            color: white;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php require_once 'includes/header.php'; ?>
    <header><h1><?= $greetings ?></h1></header>
    <p>Items bought: <?= $items?></p>
    <p>Congratulations: <?= $message ?></p>
    <?php include 'includes/footer.php'; ?>
</body>
</html>