<?php

$greetings = false;
if ($greetings === true) {
 echo "Welcome back! Franshin Mendoza";
} else {
    echo "Please log in to your account";
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
<p><?= $greetings?></p>
</body>
<?php include "MendozaFranshin_footer.php"; ?>
</html>
