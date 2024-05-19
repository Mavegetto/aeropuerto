<?php

class conexion{
    private $servidor;
    private $usuario;
    private $con;
    private $dbdatos;
    private $boletos
    private $asientos;
    private $vuelos;
   

    public function __construct(){
        $this->servidor="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->dbdatos="aeropuerto";
        $this->boletos="";
        $this->asientos="";
        $this->vuelos="";
      
        
    }

    public function conectar(){
        $this->con=mysqli_connect(
            $this->servidor,
            $this->usuario,

            $this->dbdatos,
            $this->boletos,
            $this->asientos,
            $this->vuelos,
        );
    } 

    public function envio($sql){
        echo $sql;
        mysqli_query($this->con,$sql);
    } 

    public function consulta($sql){
        $tabla=mysqli_query($this->con,$sql);
        return $tabla;
    }

    public function desconectar(){
        mysqli_close($this->con);
    }
    

}

?>