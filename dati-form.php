<?php
$name = $_GET['testo'];
$parola = $_GET['parola'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dati inseriti nel Form</title>
</head>
<body>
  <ul>
    <li>Testo: <?php echo $testo?></li>
    <li>Parola da censurare: <?php echo $parola?></li>
  </ul>
  
  
</body>

</html>