<?php

class conexion{
    private $servidor;
    private $usuario;
    private $con;
    private $dbdatos;
  
   

    public function __construct(){
        $this->servidor="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->dbdatos="aeropuerto";
      
        
    }

    public function conectar(){
        $this->con=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->dbdatos,
            
        );
    } 

    public function envio($sql){
        echo $sql;
        mysqli_query($this->con,$sql);
    } 

    public function registro($sql){
        $tabla=mysqli_query($this->con,$sql);
        return $con;
    }

    public function desconectar(){
        mysqli_close($this->con);
    }
    

}

?>