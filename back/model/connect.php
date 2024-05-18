<?php

class conexion{
    private $servidor;
    private $usuario;
    private $clave;
    private $con;
    private $dbdatos;
    private $nboletos
    private $asientos;
    private $vuelos;
   

    public function __construct(){
        $this->servidor="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->dbdatos="aeropuerto";
        $this->nboletos="";
        $this->asientos="";
        $this->vuelos="";
      
        
    }

    public function conectar(){
        $this->con=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->dbdatos,
            $this->nboletos,
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