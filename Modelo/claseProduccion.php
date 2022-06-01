<?php 

 require_once 'claseconexion.php';

 class Produccion extends BD {

   private $conexion;
     private $fecha_s;
     private $fecha_c;
     private $id_hacienda;
     private $id_cultivo;
     private $idconsulta;
     private $id;
    

     public function __construct(){

      $this->conexion = parent:: __construct();

     }

      public function setId_cultivo($id_cultivo){

        $this->id_cultivo = $id_cultivo;
     }

public function setId_Consulta($id_consulta){

        $this->idconsulta = $id_consulta;
     }

     public function setFecha_s($fecha_s){

      $this->fecha_s = $fecha_s;
     }

      public function setFecha_c($fecha_c){

      $this->fecha_c = $fecha_c;
     }

      public function setId_hacienda($id_hacienda){

      $this->id_hacienda = $id_hacienda;
     }

     public function setId_grupo($id_grupo){

        $this->id_grupo = $id_grupo;
     }
public function setId_Consultah($id_consultah){

        $this->id_consultah = $id_consultah;
     }




public function getId_Consulta(){

       return $this->idconsulta;
     }


     public function setid($id){

      $this->id = $id;

     }


     public function RegistrarProduccion(){

    

      $strSql = 'INSERT INTO produccion_a (fecha_s,fecha_c,id_hacienda1,id_cultivo1,id_productor2) VALUES (:fecha_s,:fecha_c,:id_hacienda,:id_cultivo,:id_productor2)';

        $respuestaArreglo = '';  

          try {
      
            $strExec = BD::prepare($strSql);  
            $strExec->bindValue(':fecha_s', $this->fecha_s);
            $strExec->bindValue(':fecha_c', $this->fecha_c);
            $strExec->bindValue(':id_hacienda', $this->id_hacienda);
            $strExec->bindValue(':id_cultivo', $this->id_cultivo); 
            $strExec->bindValue(':id_productor2', $this->id);
             
            $strExec->execute(); 
            $respuestaArreglo = $strExec->fetchAll(); //retornamos todos los datos de la ejecucion
            $respuestaArreglo += ['estatus' => true];
            return $respuestaArreglo;
        } 

        catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
            $errorReturn = ['estatus' => false];
            $errorReturn += ['info' => "error sql:{$e}"];
            return $errorReturn; //retornamos el contenido de esa variable
        }

        }// fin del metodo Registrar


        public function imprimirProduccion(){

          $id_p = $this->id;

         /* $strSql = "SELECT a.id_produccion,b.nombre_cultivo,c.direccion_h,c.nombre_h, 
      a.fecha_s,a.fecha_c from produccion_a a, cultivo b, hacienda c 
      where a.id_cultivo1 = b.id_cultivo and a.id_hacienda1 = c.id_hacienda";*/

      $strSql = "SELECT a.id_produccion,b.nombre_cultivo,c.direccion_h,c.nombre_h, 
      a.fecha_s,a.fecha_c,a.id_productor2 from produccion_a a, cultivo b, hacienda c
      where a.id_cultivo1 = b.id_cultivo and a.id_hacienda1 = c.id_hacienda and a.id_productor2 = '$id_p'";
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


        }// fin del metodo consultar la produccion del productor



        public function imprimirProduccionslider(){

      $strSql = "SELECT a.id_produccion,b.nombre_cultivo,c.direccion_h,c.nombre_h, 
      a.fecha_s,a.fecha_c,a.id_productor2 from produccion_a a, cultivo b, hacienda c
      where a.id_cultivo1 = b.id_cultivo and a.id_hacienda1 = c.id_hacienda";
      
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


        }// fin del metodo consultar la produccion slider



         public function imprimirProduccionparaModificar($id){

          $id_produccion = $id;

          $strSql = "SELECT a.id_produccion,b.nombre_cultivo,c.direccion_h,c.nombre_h, 
      a.fecha_s,a.fecha_c from produccion_a a, cultivo b, hacienda c 
      where a.id_cultivo1 = b.id_cultivo and a.id_hacienda1 = c.id_hacienda and id_produccion = '$id_produccion' ";
      
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


        }// fin del metodo consultar la produccion del productor




public function Modificar(){

$strSql = "UPDATE produccion_a SET fecha_s = :fecha_s, fecha_c = :fecha_c ,id_hacienda1 = :id_hacienda1 ,id_cultivo1 = :id_cultivo1 where id_produccion =".intval($this->getId_Consulta());
   $respuestaArreglo = '';

try {
              $strExec = BD::prepare($strSql);
              $strExec->bindValue(':fecha_s', $this->fecha_s);
            $strExec->bindValue(':fecha_c', $this->fecha_c);
            $strExec->bindValue(':id_hacienda1', $this->id_hacienda);
            $strExec->bindValue(':id_cultivo1', $this->id_cultivo); 
           // $strExec->bindValue(':idconsulta',$this->$idconsulta);
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

        // 
}


public function Eliminar(){

$strSql = " DELETE from produccion_a  where id_produccion =".intval($this->getId_Consulta());
 $respuestaArreglo = '';
     $strExec = BD::prepare($strSql);
    $strExec->execute();  
              

        // 
}



}


 ?>