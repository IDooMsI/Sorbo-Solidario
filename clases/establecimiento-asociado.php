<?php
include_once("db.php");
class EstablecimientoAsociado
{
    public $id;
    public $nombre;
    public $rubro;
    public $telefono;
    public $direccion;
    public $imagen;
    public $facebook;
    public $instagram;
    public $twitter;
    public $web;

    public function __construct($nombre, $rubro, $telefono, $direccion, $imagen, $facebook, $instagram,$twitter,$web, $id = null)
    {
        $this->nombre = $nombre;
        $this->rubro = $rubro;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->imagen = $imagen;
        $this->facebook = $facebook;
        $this->instagram = $instagram;
        $this->twitter = $twitter;
        $this->web = $web;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getRubro()
    {
        return $this->rubro;
    }

    public function setRubro($rubro)
    {
        $this->rubro = $rubro;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }

    public function setInstagram($instagram): void
    {
        $this->instagram = $instagram;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    public function getWeb()
    {
        return $this->web;
    }

    public function setWeb($web): void
    {
        $this->web = $web;
    }
    
}
