<?php
$color = 'Blue';

$Like = match ($color) {
     'Blue', 'Green'=> 'Blue like the sky.' ,
     'Red', "Pink"=> 'Warm colors'  ,
     default => 'So the color are not recognized',
};
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
    <body>
    <h1>Pick Colors</h1>
    <h2>My favorite Color is <?= $color?></h2>
    <p><?=$Like?></p>
   
</body>
 <?php include "MendozaFranshin_footer.php"; ?>
</html>
