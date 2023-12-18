<?php
   $x = 5;
   $y = 10;

   // Aritméticos
   echo "Operadores aritméticos: <br>";
   echo $x + $y; echo "<br>";
   echo $x - $y; echo "<br>";
   echo $x * $y; echo "<br>";
   echo $x / $y; echo "<br>";
   echo $x % $y; echo "<br>";
   echo $x **  $y; echo "<br>"; // Potencia x^y
   echo "<br>";

   // Asignación
   echo "Operadores de asigniacón: <br>";
   $x += 5 * $y;
   echo $x; echo "<br>";
   echo "etc...<br><br>";

   // Booleanos
   echo "Operadores de booleanos: <br>";
   var_dump($x == $y); echo "<br>";
   var_dump($x === $y); echo "<br>"; // Tamibén se fija en el tipo de dato
   echo "etc...<br><br>";

   // Incremento
   echo "Operadores de pos y pre (decremento e incremento): <br>";
   echo $x++; echo "<br>";
   echo "etc...<br><br>";
?>