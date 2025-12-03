<?php
$name = "Franshin Mendoza";
$greetings = "Welcome to shin's Ice Cream Store!";
$offer = ["Vanilla Choco Ice cream", 5, 50, 450];
$usual_price = ($offer[1] * $offer[2]);
$offer_price = ($offer[1] * $offer[2]);
$savings = ($offer_price - $offer_price);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="store.css">
</head>
<?php include 'header.php'; ?>
<body>
    <h1>Shin's Ice Cream Store</h1>


<h2><?= $greetings?> <?= $name?></h2>
<p>You can buy <?= $offer[1] ?> <?= $offer[0] ?> for just only P<?= $offer[3]?>.</p>
    
<?php include 'footer.php'; ?>
</body>
</html>.