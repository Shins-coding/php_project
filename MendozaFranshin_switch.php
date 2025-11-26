<?php
$day = 'Monday';
switch ($day) {
    case 'Monday':
        echo "IMAN - CALBPHYS - THEOLOGY103";

          break;
    case 'Tuesday':
        echo "ITN - PROBSTATS - READPHILHIS";

    case 'Wednesday':
        echo "ITN - DWEB";

          break;
    case 'Thursday':
        echo "CALBPHYS - TEOLOGY";

          break;
    case 'Friday':
        echo "PE - RPOBSTATS- READPHILHIS";

          break;
     default:
     
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
    <body>
    <h1></h1>
    <h2><?=$day?></h2>
    <p></p>
</body>
<?php include "MendozaFranshin_footer.php"; ?>
</html>