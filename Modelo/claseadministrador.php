<?php 

require_once 'claseconexion.php';

	class Administrador extends BD{

		//atributos
		private $nombre;
		private $apellido;
		private $cedula;
		private $fecha;
		private $correo;
		private $telefono;
		private $usuario;
		private $clave; 
		private $tipouser;

		//atributo para buscar el productor
		private $cedula_productor;

		private $conexion;
		private $idconsulta;

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

		public function setCorreo($correo){

			$this->correo = $correo;
		}

		public function setTelefono($telefono){

			$this->telefono = $telefono;
		}

		public function setUsuario($usuario){

			$this->usuario = $usuario;
		}

		public function setClave($clave2){

			$this->clave = $clave2;
		}

		public function setTipouser($tipouser){

			$this->tipouser = $tipouser;
		} 

		//recibimos la cedula para buscar el productor
		public function setBuscarcedula($cedula_productor){

			$this->cedula_productor = $cedula_productor;
		} 


public function setId_Consulta($id_consulta){

        $this->idconsulta = $id_consulta;
     }




public function getId_Consulta(){

       return $this->idconsulta;
     }





		//  CRUD
		public function RegistrarAdministrador(){

 			$strSql = 'INSERT INTO usuario (nombre,apellido,cedula,fecha,correo,telefono,usuario,clave,tipo_user) VALUES (:nombre,:apellido,:cedula,:fecha,:correo,:telefono,:usuario,:clave, :tipo_user)';

     		$respuestaArreglo = '';  

      		try {
      
		        $strExec = BD::prepare($strSql); 
		        $strExec->bindValue(':nombre', $this->nombre);
		        $strExec->bindValue(':apellido', $this->apellido);
		        $strExec->bindValue(':cedula', $this->cedula);
		        $strExec->bindValue(':fecha', $this->fecha); 
		        $strExec->bindValue(':correo', $this->correo);
		        $strExec->bindValue(':telefono', $this->telefono);
		        $strExec->bindValue(':usuario', $this->usuario);
		        $strExec->bindValue(':clave', $this->clave);
		        $strExec->bindValue(':tipo_user', $this->tipouser);
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

        // primera pantalla
        public function consultarAdministrador(){

	      $strSql = 'SELECT * FROM usuario';
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

        }// fin del metodo consultar  administrador


        // metodo para buscar la cedula de un unico productor
         public function buscarHaciendas(){

         $cedulab = $this->cedula_productor;

         	//SELECT * FROM productor where cedula_p = '$cedulab'	
	      $strSql = "SELECT  productor.id_productor ,productor.nombre_p , productor.apellido_p, productor.cedula_p,productor.correo_p,productor.telefono,productor.fecha_p,productor.correo_p, hacienda.nombre_h,hacienda.direccion_h,hacienda.telefono_h,hacienda.hectaria, hacienda.id_hacienda,parroquia.nombre_parroquia FROM productor, hacienda,parroquia where  productor.id_productor=hacienda.id_productor1 and  hacienda.id_parroquia1 = parroquia.id_parroquia and cedula_p ='$cedulab'";

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

        }// fin del metodo buscar productor

public function buscarProductor(){

         $cedulab = $this->cedula_productor;

         	//SELECT * FROM productor where cedula_p = '$cedulab'	
	      $strSql = "SELECT  productor.id_productor ,productor.nombre_p , productor.apellido_p, productor.cedula_p,productor.correo_p,productor.telefono,productor.fecha_p,productor.correo_p FROM productor where  cedula_p ='$cedulab'";

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

        }


public function buscarProduccion(){

         $cedulab = $this->cedula_productor;

         	//SELECT * FROM productor where cedula_p = '$cedulab'	
	     $strSql = "SELECT a.id_produccion,b.nombre_cultivo,c.direccion_h,c.nombre_h, 
      a.fecha_s,a.fecha_c, d.cedula_p from produccion_a a, cultivo b, hacienda c, productor d  
      where a.id_cultivo1 = b.id_cultivo and a.id_hacienda1 = c.id_hacienda and d.id_productor = c.id_productor1 and d.cedula_p ='$cedulab'";
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
        }


public function eliminarpro($id){

	$id_productor = $id;

	$consulta = "DELETE from productor where id_productor = '$id_productor' ";
	try {

		$eliminarpro = BD::prepare($consulta);
		$eliminarpro->execute();


		
	} catch (Exception $e) {

		$erroreliminar = "se produjo un error en ".$e;
		return $erroreliminar;
		
	}
}

public function eliminarproduccion($id){

	$id_produccion = $id;

	$consulta = "DELETE from produccion_a where id_produccion = '$id_produccion' ";
	try {

		$eliminarproduccion = BD::prepare($consulta);
		$eliminarproduccion->execute();


		
	} catch (Exception $e) {

		$erroreliminar = "se produjo un error en ".$e;
		return $erroreliminar;
		
	}
}






}














	

 ?>