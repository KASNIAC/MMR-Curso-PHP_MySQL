<?php
   // Funciones para strings
   $mensaje = "Hoy voy a aprender mucho y con mucho me refiero a demasiado";

   // Longitud:
   echo strlen($mensaje); echo "<br>";

   // Número de palabras:
   echo str_word_count($mensaje); echo "<br>";

   // Reversa:
   echo strrev($mensaje); echo "<br>";

   // Encontrar texto 
   echo  strpos($mensaje, "mucho"); echo "<br>"; // strpos: stands for "string position"

   // Reemplazar texto
   echo str_replace("aprender", "nadar", $mensaje); echo "<br>";

   // Convertir a minúsculas
   echo strtolower($mensaje); echo "<br>";

   // Convertir a mayúsculas
   echo strtoupper($mensaje); echo "<br>";

   // Comparar cadenas
   echo strcmp("hola", "adios"); echo "<br>"; // Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.
   
   // Substraer cadena
   echo substr($mensaje, 10); echo "<br>"; // Obtiene la cadena desde el caracter 10 hasta el final de la misma
   echo substr($mensaje, 10, 5); echo "<br>"; // Obtiene los primeros 5 caracteres a partir del caracter 10 de la cadena

   // Remover espacios en blanco
   echo trim("                  hola loco coo          oc"); echo "<br>";
?> 