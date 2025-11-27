<?php 
$day = 'Tuesday';
$offer = match($day) {
    'Monday' => '20% off chocolates',
    'Tuesday' => '10% off peppermints',
    'Saturday', 'Sunday' => '20% off mints',
    default => '10% off your entire order',
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match BBJ STORE</title>
    <style>
        body {
            margin: 0;
            background-color: #C19A6B;
            line-height: 1.6;
            background-image: url()
        }
        h1, h2 {
            margin: 0;
            text-align: center;
        }
        p {
            margin: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>BBJ Store </h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
</html>