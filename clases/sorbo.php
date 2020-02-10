<?php
include_once("db.php");
class Sorbo{
    public $id;
    public $donador;
    public $numero_de_sorbo;
    public $fecha;
    public $establecimiento;
    public $organizador;
    public $causa;
    
    public function __construct($donador, $numero_de_sorbo, $fecha, $establecimiento, $organizador, $causa, $id= null){
        $this->donador = $donador;
        $this->numero_de_sorbo = $numero_de_sorbo;
        $this->fecha = $fecha;
        $this->establecimiento = $establecimiento;
        $this->organizador = $organizador;
        $this->causa = $causa;
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

    public function getNumeroDeSorbo(){
        return $this->numero_de_sorbo;
    }

    public function setNumeroDeSorbo($numero_de_sorbo){
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

    public function getCausa(): string
    {
        return $this->causa;
    }

    public function setCausa($causa): void
    {
        $this->causa = $causa;
    }

}



?>