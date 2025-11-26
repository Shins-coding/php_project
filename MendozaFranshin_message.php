<?php
$hour = date("20");
$greetings = true;
if ($greetings === true) {
 echo "Welcome to our WD - 203!";
}

if ($hour < 12) {
$message = 'Good Morning, Everyone';
} elseif ($hour < 18) {
$message = 'Good Afternoon, Shin';
} else {
$message = 'Good Evening, EveryBody';
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1></h1>
<h2></h2>
<p><?= $message ?></p>
</body>
<?php include "MendozaFranshin_footer.php"; ?>
</html>