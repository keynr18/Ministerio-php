<?php
class BD extends PDO {

    private $host='localhost';
    private $bd= 'sistemafinal';
    private $password='22184719';
    private $user='postgres';
    private $port=5432;
    private $repConexion;
    private $errorconexion;
    private $conexion; // Se guarda la conexion

   public function __construct(){  

      try { 

        //$this->conexion = new PDO("pgsql:host=$this->host;dbname=$this->bd;port=$this->port;user=$this->user;password=$this->password");

        //$this->conexion = $this->dbh;
        $this->conexion = parent::__construct("pgsql:host=$this->host ; port=$this->port; dbname=$this->bd; user=$this->user; password=$this->password");//ejecutamos la conexión
        
         //echo "conexion exitosa";
         $this->repconexion = true;
         $this->errorconexion = "";
        }

        catch (PDOException $e) {
           //echo "error en:".$e;  
           $this->errorconexion = "error en:" . $e;
           echo $this->errorconexion;
      
         }// fin del catch }// fin del constructor
      }// fin del constructor


      public function getRepConexion(){
          return  $this->repconexion; 
      }
      public function getErrorConexion() { //metodo que nos devuelve el mensaje de error si no llega a darse la conexion
        return $this->errorconexion;
      }
      public function getConexion(){

          return $this->conexion;
      }

  }// fin de la clase


?>