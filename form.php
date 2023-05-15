<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form</title>
</head>
<body>

<h2>Censura una parola a tua scelta in un testo</h2>

  <div class="container">

    <form action="dati-form.php" method="GET" ">
      <input type="text" name="testo" class="testo" placeholder="Inserisci il testo" >
      <input type="text" name="censura" class="parola" placeholder="Inserisci la parola da censurare">
      <button type="submit">Submit</button>
    </form>
  </div>
  
  
</body>



</html>