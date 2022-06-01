<?php 

	require_once "claseconexion.php";

	class Eventos extends BD{

		private $tituloEventos;
		private $direccionEventos;
		private $fechaA;
		private $fechaC; 
		private $hora;
		private $ruta;// esta es la ruta de la imagen que se va a guardar en la base de datos
		private $contenido;
		private $conexion;
 		private $idconsulta;

		public function __construct(){

			$this->conxion = parent:: __construct();

		}


		public function setTitulo($tituloEventos){

			$this->tituloEventos = $tituloEventos;
		}

		public function setDireccion($direccionEventos){

			$this->direccionEventos = $direccionEventos;
		}

		public function setFechaA($fechaA){

			$this->fechaA = $fechaA;
		}	

		public function setFechaC($fechaC){

			$this->fechaC = $fechaC;
		}

		public function setHora($hora){

			$this->hora = $hora;
		}	

		public function setContenido($contenido){

			$this->contenido = $contenido;
		}	

		public function setImagen($ruta){

			$this->ruta = $ruta;
		}	



public function setId_Consulta($id_consulta){

        $this->idconsulta = $id_consulta;
     }



public function getId_Consulta(){

       return $this->idconsulta;
     }

		public function RegistrarEventos(){

	 			$strSql = 'INSERT INTO eventos (titulo_e,direccion_e,fecha_a,fecha_c,hora,contenido_e,imagen) VALUES (:titulo_e,:direccion_e,:fecha_a,:fecha_c,:hora,:contenido_e,:imagen)';

	     		$respuestaArreglo = '';  

	      		try {
	      
			        $strExec = BD::prepare($strSql); 
			        $strExec->bindValue(':titulo_e', $this->tituloEventos);
			        $strExec->bindValue(':direccion_e', $this->direccionEventos);
			        $strExec->bindValue(':fecha_a', $this->fechaA); 
			        $strExec->bindValue(':fecha_c', $this->fechaC); 
			        $strExec->bindValue(':hora', $this->hora);
			        $strExec->bindValue(':contenido_e', $this->contenido);
			        $strExec->bindValue(':imagen', $this->ruta);
			        $strExec->execute(); 
			        $respuestaArreglo = $strExec->fetchAll(); //retornamos todos los datos de la ejecucion
			        //$respuestaArreglo += ['estatus' => true];
			        return $respuestaArreglo;
			    } 

			    catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
			        $errorReturn = ['estatus' => false];
			        $errorReturn += ['info' => "error sql:{$e}"];
			        return $errorReturn; //retornamos el contenido de esa variable
			    }

	        }// fin del metodo Registro de eventos


	    public function mostrarEventos(){

	      $strSql = 'SELECT *FROM eventos';
	      $eventos = '';

	      try {
	        $strExec = BD::prepare($strSql);
	        $strExec->execute();
	         $strExec->setFetchMode(PDO::FETCH_ASSOC);
	        $eventos = $strExec->fetchAll(PDO::FETCH_ASSOC); //retornamos todos los datos de la ejecucion
	        $eventos += ['estatus' => true];
	      return $eventos;

	      } catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
	        $errorReturn = ['estatus' => false];
	        $errorReturn += ['info' => "error sql:{$e}"];
	        return $errorReturn; //retornamos el contenido de esa variable
	      }// fin del catch

        }// fin del metodo consultar

     

public function Modificare(){

	 			$strSql = 'UPDATE eventos SET titulo_e=:titulo_e,direccion_e=:direccion_e,fecha_a=:fecha_a,fecha_c=:fecha_c,hora=:hora,contenido_e=:contenido_e,imagen=:imagen where id_eventos='.intval($this->getId_Consulta());

	     		$respuestaArreglo = '';  

	      		try {
	      
			        $strExec = BD::prepare($strSql); 
			        $strExec->bindValue(':titulo_e', $this->tituloEventos);
			        $strExec->bindValue(':direccion_e', $this->direccionEventos);
			        $strExec->bindValue(':fecha_a', $this->fechaA); 
			        $strExec->bindValue(':fecha_c', $this->fechaC); 
			        $strExec->bindValue(':hora', $this->hora);
			        $strExec->bindValue(':contenido_e', $this->contenido);
			        $strExec->bindValue(':imagen', $this->ruta);
			        $strExec->execute(); 
			        $respuestaArreglo = $strExec->fetchAll(); 
			        $respuestaArreglo += ['estatus' => true];
			        return $respuestaArreglo;
			    } 

			    catch (PDOException $e) { 
			        $errorReturn = ['estatus' => false];
			        $errorReturn += ['info' => "error sql:{$e}"];
			        return $errorReturn; 
			    }

	        }




public function eliminar(){

$query="DELETE FROM eventos where id_eventos=".intval($this->getId_Consulta());
$thor=BD::prepare($query);
$thor->execute();
}



public function mostrarEventos2(){

	      $strSql = "SELECT *FROM eventos where eventos.id_eventos=".intval($this->getId_Consulta());
	      $eventos = '';

	      try {
	        $strExec = BD::prepare($strSql);
	        $strExec->execute();
	         $strExec->setFetchMode(PDO::FETCH_ASSOC);
	        $eventos = $strExec->fetchAll(PDO::FETCH_ASSOC); //retornamos todos los datos de la ejecucion
	        $eventos += ['estatus' => true];
	      return $eventos;

	      } catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
	        $errorReturn = ['estatus' => false];
	        $errorReturn += ['info' => "error sql:{$e}"];
	        return $errorReturn; //retornamos el contenido de esa variable
	      }// fin del catch

        }// fin del metodo consultar
     














     }// fin del clase











	

 ?>