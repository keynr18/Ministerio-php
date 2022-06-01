<?php 

header("content-type:application/octer-stream");
header("content-Disposition: attachment; filename=Productores.docx");
header("pragma: no-cache");
header("Expirea: 0");

require_once 'Modelo/claseproductor.php';

$objproductor = new Productor();

$resultado = $objproductor->consultarProductor();

 ?>
 <table style="border: 1px #fff;">
      <tr style="background-color:green;width: 500px;color: #fff;">
        <td colspan="6"><img src="sistemaAgricola/Vista/img/logoministerio.png">

          <img style="height: 70px; width: 300px;margin-left: 30px;" src="sistemaAgricola/Vista/img/logo.png">
        </td>
      </tr>
      <tr style="">
        <td></td>
        <td style="text-align: center;padding-top: 30px;padding-bottom: 20px;">REPORTES DE PRODUCTORES</td>
        <td></td>
      </tr>
</table>

 <table style="border: 1px #fff;" class="table table-dark table-hover table-responsive-sm mt-3">
      <tr style="background-color:green; color: #fff;border: 1px solid #fff;" >
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