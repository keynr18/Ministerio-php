<?php 

    require_once 'claseconexion.php';

   class Grupo extends BD{


   		public function sacargrupo(){

        $strSql = 'SELECT *FROM grupoa';
        $respuestaArreglo = '';

        try {
          $strExec = BD::prepare($strSql);
          $strExec->execute();
           $strExec->setFetchMode(PDO::FETCH_ASSOC);
          $respuestaArreglo = $strExec->fetchAll(PDO::FETCH_ASSOC); //retornamos todos los datos de la ejecucion
          $respuestaArreglo += ['estatus' => true];
        return $respuestaArreglo;

        } catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn; //retornamos el contenido de esa variable
        }// fin del catch

        }// fin del metodo consultar


   }


 ?>