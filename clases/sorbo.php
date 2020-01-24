<?php
include_once("db.php");
class Sorbo{
    public $id;
    public $donador;
    public $numero_de_sorbo;
    public $fecha;
    public $establecimiento;
    public $organizador;
    public $id_causa;
    
    public function __construct($donador, $numero_de_sorbo, $fecha, $establecimiento, $organizador, $id_causa, $id= null){
        $this->donador = $donador;
        $this->numero_de_sorbo = $numero_de_sorbo;
        $this->fecha = $fecha;
        $this->establecimiento = $establecimiento;
        $this->organizador = $organizador;
        $this->id_causa = $id_causa;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getDonador(){
        return $this->donador;
    }
    public function setDonador($donador){
        $this->donador = $donador;
    }
    public function getNumero_de_sorbo(){
        return $this->numero_de_sorbo;
    }
    public function setNumero_de_sorbo($numero_de_sorbo){
        $this->numero_de_sorbo = $numero_de_sorbo;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function getEstablecimiento(){
        return $this->establecimiento;
    }
    public function setEstablecimiento($establecimiento){
        $this->establecimienti = $establecimiento;
    }
    public function getOrganizador(){
        return $this->organizador;
    }
    public function setOrganizador($organizador){
        $this->organizador = $organizador;
    }
    // public function getCausa($id){
    //     $conexion = new Db();
    //     $consulta = $conexion->prepare('SELECT * FROM causas WHERE $id = :id_causa');
    //     $consulta->bindParam(':id_causa',$id);
    //     $consulta->execute();
    //     $causaArray = $consulta->fetch();
    //     if ($causaArray) {
    //         foreach ($causaArray as $causa) {
    //             $nombre = $causa["nombre"];
    //         }
    //     }
    //     return $nombre;
    // }

}



?>