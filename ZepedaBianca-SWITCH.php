<?php 
$day = 'Friday';

switch($day){
    case 'Monday':
        $offer = '20% off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    case 'Wednesday':
        $offer = '10% off peppermints';
        break;
    case 'Friday':
        $offer = 'Black Friday! 50% off all items';
        break;
    default:
        $offer = 'Buy three packs, get one free';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch BBJ STORE</title>
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
    <h1>BBJ Store</h1>
    <p>The home of sweetness :D</p>
    <h2>It's <?= $day ?>!</h2>
    <h2>Offers</h2>
    <p><?= $offer?></p>
</body>
</html>