<?php 
$user = "Bianca";

$pagbati = "Welcome to BBJ Cakes & Pastries, " . $user . "!";

$offer = ["Korean Bread", 12, 90.00, 45.00];

$reg_price = $offer[1] * $offer[2];

$offer_price = $offer[1] * $offer[3];

$saving = $reg_price - $offer_price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBJ Bread & Pastries</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?= require_once 'includes/header.php' ?>
    <?= $pagbati; ?>
    <h2>Saves: <?= $saving; ?></h2>
    <p>Buy <?= $offer[1]; ?> pieces of <?= $offer[0]; ?> for only P<?= $offer_price; ?> 
    <br> (original price: P<?= $reg_price; ?>)</p>
    <?= include 'includes/footer.php' ?>
</body>
</html>