<?php

// Opción 2, usar action="operaciones.php" y mandar a llamar a la función aquí
// validarCampos();

function multiplicar($n1, $n2) {
   return $n1 * $n2;
}

function esNumero($n1, $n2) {
   return is_numeric($n1) && is_numeric($n2);
}

function mostrarError() {
   echo "<span class='error'>Ingresa solo números</span>";
}

function validarCampos() {
   if (isset($_POST['numero01']) && isset($_POST['numero02'])) {
      $n1 = $_POST['numero01'];
      $n2 = $_POST['numero02'];

      if (esNumero($n1, $n2)) {
         echo "Resultado: ", multiplicar($n1, $n2);
      } else {
         mostrarError();
      }
   }
}
