<?php
$name = "Shin";
$greetings = "Welcome back!";
if ($name === " ") {
    $greetings + $name;

} else {
    $greetings;

}

$product = "Vanilla Choco Ice Cream";
$cost = 50;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="store.css">
	<title>Shin's Ice Cream Store</title>
</head>
<body>
	<?php include 'header.php'; ?>

<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <tr>
    </tr>

        <tr>
            <td><?= $packs?></td>
            <td><?= $cost?></td>
        </tr>
</table>

	<?php include 'footer.php'; ?>
</body>
</html>