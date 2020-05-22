<?php
include_once('sorbo.php');
include_once('establecimiento-asociado.php');

class Db{

    protected $conn;   

    public function __construct(){
        $dsn = 'mysql:host=db5000272134.hosting-data.io;dbname=dbs265618;charset=utf8mb4;port=3306';
        $user = 'dbu438447';
        $pass = 'Ferreyra24111972.';
        // $dsn = 'mysql:host=127.0.0.1;dbname=sorbo_solidario;charset=utf8mb4;port=3306';
        // $user = 'root';
        // $pass = "";

        try{
            $this->conn = new PDO($dsn,$user,$pass);
        } catch (Exception $e){
            echo "La conexion a la base de datos fallo: " .$e->getMessage();
        }
        
    }

    public function guardarSorbo(Sorbo $sorbo): Sorbo
    {
        $db = $this->conn;
        $query = $db->prepare("INSERT INTO sorbos VALUES(default, :donador, :numero_de_sorbo, :fecha, :establecimiento, :organizador, :causa)");
        $query->bindvalue(":donador", $sorbo->getDonador(), PDO::PARAM_STR);
        $query->bindvalue(":numero_de_sorbo", $sorbo->getNumeroDeSorbo());
        $query->bindValue(":fecha", $sorbo->getFecha());
        $query->bindValue(":establecimiento", $sorbo->getEstablecimiento());
        $query->bindValue(":organizador",$sorbo->getOrganizador());
        $query->bindValue(":causa",$sorbo->getCausa());

        try {

            $query->execute();
            $id = $db->lastInsertId();
            $sorbo->setId($id);

        } catch (Exception $e) {
            echo "La conexion a la base de datos fallo:" . $e->getMessage();
        }

        return $sorbo;
    }

    public function traerSorbos(string $causa): array
    {
        $db = $this->conn;
    
        $query = $db->prepare("SELECT * FROM sorbo WHERE causa = '$causa'");
        $query->execute();
        $sorbos = $query->fetchAll(PDO::FETCH_ASSOC);
            
        return $sorbos;
    }

    public function contarSorbos($causa): int
    {
        $db = $this->conn;
    
        $query = $db->prepare("SELECT * FROM sorbo WHERE causa = '$causa'");
        $query->execute();
        $cantidad = $query->rowCount();
            
        return $cantidad;
    }

    public function guardarEstablecimiento(EstablecimientoAsociado $establecimiento)
    {
        $db = $this->conn;
        $query = $db->prepare("INSERT INTO establecimientos_asociados VALUES(default, :nombre, :rubro, :telefono, :direccion, :imagen, :facebook, :instagram, :twitter, :web)");
        $query->bindvalue(":nombre", $establecimiento->getNombre(), PDO::PARAM_STR);
        $query->bindvalue(":rubro", $establecimiento->getRubro());
        $query->bindValue(":telefono", $establecimiento->getTelefono());
        $query->bindValue(":direccion", $establecimiento->getDireccion());
        $query->bindValue(":imagen", $establecimiento->getImagen());
        $query->bindValue(":facebook", $establecimiento->getFacebook());
        $query->bindValue(":instagram", $establecimiento->getInstagram());
        $query->bindValue(":twitter", $establecimiento->getTwitter());
        $query->bindValue(":web", $establecimiento->getWeb());

        try {

            $query->execute();
            $id = $db->lastInsertId();
            $establecimiento->setId($id);
        } catch (Exception $e) {
            echo "La conexion a la base de datos fallo:" . $e->getMessage();
        }

        return $establecimiento;
    }

    public function traerEstablecimientos(): array
    {
        $db = $this->conn;

        $query = $db->prepare("SELECT * FROM establecimientos_asociados");
        $query->execute();
        $establecimientos = $query->fetchAll(PDO::FETCH_ASSOC);

        return $establecimientos;
    }

    public function contarEstablecimientos(): int
    {
        $db = $this->conn;

        $query = $db->prepare("SELECT * FROM establecimientos_asociados");
        $query->execute();
        $cantidad = $query->rowCount();

        return $cantidad;
    }
}
