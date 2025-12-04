<?php 
$user = "Bianca";

$product = "Korean Bread Discounts";

$cost = 90.00;

for ($quantity = 1; $quantity <= 10; $quantity++) {
    $subtotal = $cost * $quantity;
    $discount = ($cost / 100);
    $totals = [$quantity => $cost ];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - BBJ Bread & Pastries</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?= require_once 'includes/header.php' ?>
    <?php if ($user == true) {
        echo $greet = "Hello again, " . $user . " !";
        } 
    ?>
    <h2><?= $product ?></h2>
    <table>
        <thead>
            <th>Packs</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php ?>
            <td></td>
        </tbody>
    </table>

    <?= include 'includes/footer.php' ?>
</body>
</html>