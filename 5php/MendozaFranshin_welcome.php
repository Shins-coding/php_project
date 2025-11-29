<?php

$greetings = true;
if ($greetings === true) {
 echo "Good Afternoon to our WD - 203!\n";
 echo "Announcement for  lesson for tomorrow is PHP Conditional Statements.";

}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Class in WD - 203</h1>
<h2>November 26, 2025</h2>
<p><?= $greetings?></p>
</body>
<?php include "MendozaFranshin_footer.php"; ?>
</html>
