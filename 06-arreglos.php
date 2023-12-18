<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arrelgos</title>
   <style>
      body {
         background-color: #B5CDE6;
         font-family: Arial;
         font-size: 4em;
         padding: 50px;
      }
   </style>
</head>

<body>
   <?php
   $frutas = array("platano", "manzana", "uvas", "fresas");
   print_r($frutas);
   echo "<br><br>";

   echo $frutas[1];
   echo "<br><br>";

   echo count($frutas);
   echo "<br><br>";

   for ($i = 0; $i < count($frutas); ++$i) {
      echo $frutas[$i] . "<br>";
   }
   echo "<br><br>";

   $edades = array("KASNIAC" => 23, "Fernanda" => 23, "Pedro" => 54);
   foreach ($edades as $clave => $valor) {
      echo $clave . " -> " . $valor . "<br>";
   }
   echo "<br>";
   echo $edades["KASNIAC"];
   echo "<br><br>";
   ?>
</body>

</html>