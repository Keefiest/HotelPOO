<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
// HOTELS

$Garp = new Hotel("Garp", 4, "32 avenue de MarineFord", "East Blue");
$GoldRoger = new Hotel("Gol D. Roger", 5, "14 rue de l'Arbre", "Strasbourg");
// CLIENTS

$Albert = new Client("Albert", "Jerry", true, "01/12/2000");
$Ronnie = new Client("Ronnie", "Coleman", true, "04/06/1987");
// CHAMBRES

$c13 = new Chambre(13, 70, false, false, 2, $GoldRoger);
$c14 = new Chambre(14, 400, true, false, 2, $GoldRoger);
$c15 = new Chambre(15, 120, false, false, 2, $GoldRoger);
$c16 = new Chambre(16, 460, true, false, 2, $GoldRoger);
$c17 = new Chambre(17, 210, false, false, 2, $GoldRoger);
$c18 = new Chambre(18, 790, true, false, 2, $GoldRoger);
$c01 = new Chambre(01, 150, false, false, 3, $Garp);
$c02 = new Chambre(02, 150, true, false, 1, $Garp);
// RESERVATIONS
$r_01 = new Reservation("01", "09/10/2022", "10/13/2022", $GoldRoger, $c13, $Albert);
$r_02 = new Reservation("02", "09/10/2022", "09/21/2022", $GoldRoger, $c14, $Ronnie);
$r_13 = new Reservation("13", "06/10/2022", "08/10/2022", $GoldRoger, $c01, $Ronnie);
$r_14 = new Reservation("14", "06/10/2022", "08/10/2022", $Garp, $c02, $Albert);
//AFFICHAGES

echo $GoldRoger;
echo $GoldRoger->showReservation();
echo $Garp->showReservation();
echo $Ronnie->showReservation();
echo $GoldRoger->showChambreStatus();

?>
</body>
</html>