<?php 

header("content-type:application/octer-stream");
header("content-Disposition: attachment; filename=Productores.xls");
header("pragma: no-cache");
header("Expirea: 0");

require_once 'Modelo/claseproductor.php';

$objproductor = new Productor();

$resultado = $objproductor->consultarProductor();

 ?>
<table>
      <tr>
        <td style="background-color: green;height: 300px;border-bottom: 1px solid #ffff;"></td>
      </tr>
</table>
 <table class="table table-dark table-hover table-responsive-sm mt-3">
      <tr style="background-color:green;" >
        <td class="text-center table-hover">NOMBRE</td>
        <td class="text-center table-hover">APELLIDO</td>
        <td class="text-center table-hover">CEDULA</td>
        <td class="text-center table-hover">FECHA</td>
        <td class="text-center table-hover">CORREO</td>
        <td class="text-center table-hover">TELEFONO</td>
      </tr>
      <?php

          foreach ($resultado as $resul) {

            echo "<tr>
              <td class='text-center table-hover'> {$resul['nombre_p']} </td>
              <td class='text-center table-hover'>{$resul['apellido_p']}</td>
              <td class='text-center table-hover'>{$resul['cedula_p']}</td>
              <td class='text-center table-hover'>{$resul['fecha_p']}</td>
              <td class='text-center table-hover'>{$resul['correo_p']}</td>
              <td class='text-center table-hover'>{$resul['telefono']}</td>
            </tr>";

          }

      ?>

 </table>