<?php 

	require_once 'claseconexion.php';

	class Hacienda extends BD{

		private $nombreh;
		private $direccion;
		private $telefonoh;
		private $latitud;
		private $longitud;
		private $parroquia;
		private $productor;
		private $hectaria; 
		private $conexion;
		private $id; 
		 private $idconsulta;

        public function __construct(){

			$this->conexion = parent:: __construct();
		}


		public function setnombreh ($nombrehacienda){

		$this->nombreh=$nombrehacienda;

		}

		public function setdireccion ($direccionhacienda){

			$this->direccion=$direccionhacienda;

		}

		public function settelefono ($telefonohacienda){


			$this->telefonoh=$telefonohacienda;
		}

		public function setlatitud ($latitud){

		$this->latitud=$latitud;

		}

		public function setlongitud ($longitud)
		{
			$this->longitud=$longitud;

		}

		public function setparroquia ($parroquiahacienda)
		{

			$this->parroquia=$parroquiahacienda;

		}

		public function sethectaria ($hectariahacienda)
		{

			$this->hectaria=$hectariahacienda;

		}




		public function setid($id)
		{

			 $this->id = $id;

		}

public function setId_Consulta($id_consulta2){

        $this->idconsulta = $id_consulta2;
     }




public function getId_Consulta(){

       return $this->idconsulta;
     }




	public function RegistrarHacienda(){

	 			$strSql = 'INSERT INTO hacienda (nombre_h,direccion_h,telefono_h,latitud,longitud,id_parroquia1,id_productor1,hectaria) VALUES (:nombre_h,:direccion_h,:telefono_h,:latitud,:longitud,:id_parroquia1,:id_productor1,:hectaria)';

	     		$respuestaArreglo = '';  

	      		try {
	      
			        $strExec = BD::prepare($strSql); 
			        $strExec->bindValue(':nombre_h', $this->nombreh);
			        $strExec->bindValue(':direccion_h', $this->direccion);
			        $strExec->bindValue(':telefono_h', $this->telefonoh); 
			        $strExec->bindValue(':latitud', $this->latitud); 
			        $strExec->bindValue(':longitud', $this->longitud);
			        $strExec->bindValue(':id_parroquia1', $this->parroquia);
			        $strExec->bindValue(':id_productor1', $this->id);
			        $strExec->bindValue(':hectaria', $this->hectaria);
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


	        // imprimir hacienda para el registro de produccion

	   public function sacarhacienda(){

        $h = $this->id;
        //SELECT hacienda.nombre_h,hacienda.direccion_h,hacienda.telefono_h, hacienda.hectaria, parroquia.nombre_parroquia from hacienda,parroquia where hacienda.id_parroquia1 = parroquia.id_parroquia and id_productor1 ='$h'
        
        $strSql = "SELECT * from hacienda left join parroquia on hacienda.id_parroquia1 = parroquia.id_parroquia where id_productor1 ='$h'";
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


        public function sacarhaciendaParaModificar($id){

        $h = $id;
        //SELECT hacienda.nombre_h,hacienda.direccion_h,hacienda.telefono_h, hacienda.hectaria, parroquia.nombre_parroquia from hacienda,parroquia where hacienda.id_parroquia1 = parroquia.id_parroquia and id_productor1 ='$h'
        
        $strSql = "SELECT * from hacienda left join parroquia on hacienda.id_parroquia1 = parroquia.id_parroquia where id_hacienda ='$h'";
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

        }// fin del metodo consultar hacienda para  modificar


public function Modificarh(){

$id = $this->idconsulta;
//$strSql = 'UPDATE hacienda SET nombre_h =:nombre_h ,direccion_h = :direccion_h ,telefono_h = :telefono_h , id_parroquia1=:id_parroquia,hectaria=:hectaria where id_hacienda ='.intval($this->getId_Consulta());
$strSql = "UPDATE hacienda SET nombre_h =:nombre_h ,direccion_h = :direccion_h ,telefono_h = :telefono_h , id_parroquia1=:id_parroquia,hectaria=:hectaria where id_hacienda = '$id'";


	     		$respuestaArreglo = '';  

	      		try {
	      
			        $strExec = BD::prepare($strSql); 
			        $strExec->bindValue(':nombre_h', $this->nombreh);
			        $strExec->bindValue(':direccion_h', $this->direccion);
			        $strExec->bindValue(':telefono_h', $this->telefonoh); 
			       // $strExec->bindValue(':latitud', $this->latitud); 
			       //$strExec->bindValue(':longitud', $this->longitud);
			        $strExec->bindValue(':id_parroquia', $this->parroquia);
			      //  $strExec->bindValue(':id_productor', $this->id);
			        $strExec->bindValue(':hectaria', $this->hectaria);
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


public function consultar(){

$query="SELECT *FROM hacienda where id_hacienda=".intval($this->getId_Consulta());
$eventos = '';

$thor=BD::prepare($query);
$thor->execute();
$thor->setFetchMode(BD::FETCH_ASSOC);
$eventos = $thor->fetchAll(BD::FETCH_ASSOC); //retornamos todos los datos de la ejecucion
$eventos += ['estatus' => true];
 return $eventos;


       }// fin del metod

public function Eliminar(){

$strSql = " DELETE from hacienda  where id_hacienda =".intval($this->getId_Consulta());
 $respuestaArreglo = '';
     $strExec = BD::prepare($strSql);
    $strExec->execute();	
             	

        // 
}







}

