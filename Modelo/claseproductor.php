<?php 

require_once 'claseconexion.php';

	class Productor extends BD {

		//atributos
		private $nombre;
		private $apellido;
		private $cedula;
		private $fecha;
		private $telefono;
		private $correo;
		private $usuario;
		private $clave; 
		private $conexion;
		private $consulta;
		private $idconsulta;
		private $id;

		//metodos
		public function __construct(){

			$this->conexion = parent:: __construct();
		}

		// metodos para cargar los atributos de los datos insertados en el formulario

		public function setNombre($nombre){

			$this->nombre = $nombre;
		}

		public function setApellido($apellido){

			$this->apellido = $apellido;
			
		}

		public function setCedula($cedula){

			$this->cedula = $cedula;
		}

		public function setFecha($fecha){

			$this->fecha = $fecha;
		}

		public function setTelefono($telefono){

			$this->telefono = $telefono;
		}

		public function setCorreo($correo){

			$this->correo = $correo;
		}

		public function setUsuario($usuario){

			$this->usuario = $usuario;
		}

		public function setClave($clave2){

			$this->clave = $clave2;
		}

		public function setId_Consulta($id_consulta){

        $this->idconsulta = $id_consulta;
     }


		public function getId_Consulta(){

       return $this->idconsulta;
     }

     public function setid($idconsulta){

     	$this->id = $idconsulta;
     }


		//  CRUD
		public function RegistrarProductor(){
 			$strSql = 'INSERT INTO Productor (nombre_p,apellido_p,cedula_p,fecha_P,correo_p,telefono,usuario_p,clave_p) VALUES (:nombre_p, :apellido_p, :cedula_p, :fecha_p, :correo_p, :telefono, :usuario_p, :clave_p)';

     		$respuestaArreglo = '';  

      		try {
      
		        $strExec = BD::prepare($strSql); 
		        $strExec->bindValue(':nombre_p', $this->nombre);
		        $strExec->bindValue(':apellido_p', $this->apellido);
		        $strExec->bindValue(':cedula_p', $this->cedula); 
		        $strExec->bindValue(':fecha_p', $this->fecha); 
		        $strExec->bindValue(':correo_p', $this->correo);
		        $strExec->bindValue(':telefono', $this->telefono);
		        $strExec->bindValue(':usuario_p', $this->usuario);
		        $strExec->bindValue(':clave_p', $this->clave);
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



        // para imprimir todos los productores

        public function consultarProductor(){

	      $strSql = 'SELECT * FROM productor';
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

        }// fin del metodo consulta



public function modificar(){

	//$idm = $idconsulta;

 			$strSql = "UPDATE productor SET nombre_p=:nombre_p , apellido_p=:apellido_p, cedula_p=:cedula_p,fecha_p=:fecha_p,correo_p=:correo_p,telefono=:telefono,usuario_p=:usuario_p,clave_p=:clave_p where id_productor = $this->id ";
     		$respuestaArreglo = '';  

      		try {
      
		        $strExec = BD::prepare($strSql); 
		        $strExec->bindValue(':nombre_p', $this->nombre);
		        $strExec->bindValue(':apellido_p', $this->apellido);
		        $strExec->bindValue(':cedula_p', $this->cedula); 
		        $strExec->bindValue(':fecha_p', $this->fecha); 
		        $strExec->bindValue(':correo_p', $this->correo);
		        $strExec->bindValue(':telefono', $this->telefono);
		        $strExec->bindValue(':usuario_p', $this->usuario);
		        $strExec->bindValue(':clave_p', $this->clave);
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

        }// fin del metodo Registr



public function consultarProductormodificar($id){
	
			$idproductor=$id;

	      $strSql = "SELECT * FROM productor where id_productor='$idproductor'";
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



/*public function consultaactualizado($id){
			$idproductor=$id;

	      $strSql = "SELECT * FROM productor where id_productor='$idproductor'";
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
*/
	





	}//fin de la clase

























 ?>