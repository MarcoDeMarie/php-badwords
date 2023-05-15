<?php
$name = $_GET['testo'];
$censura = $_GET['censura'];
$testo_censurato= str_replace($censura, '***', $name);
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
    <li>Testo: <?php echo $name?></li>
    <li>Parola da censurare: <?php echo $censura?></li>
    <li>Testo censurato: <?php echo $testo_censurato?> </li>
  </ul>
</body>

</html>