<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <title>Desafio - accordion</title>

  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

</head>

<body>

<div id="accordion">

  <h3>1</h3>
  <div>
    <p>
    1 accordion
    </p>
  </div>

  <h3>2</h3>
  <div>
    <p>2 accordion</p>
  </div>

  <h3>3</h3> 
  <div>
    <p>3 accordion</p>
  </div>

  <h3>Section 4</h3>
  <div>
    <p>4 accordion</p>
  </div>


</div>


  <?php

  for ($i=0;$i<5;$i++)
   echo "<br>" . "Linha = " . $i;

  ?>

</body>
</html>