<?php
include_once('sorbo.php');
include_once('causa.php');

class Db{

    protected $conn;   

    public function __construct(){
<<<<<<< HEAD
        $dsn = 'mysql:host=sql;dbname=sorbosolidario;charset=utf8mb4;port=3306';
        $user = 'sorbosolidario';
        $pass = 'sorbosolidario';
=======
        $dsn = 'mysql:host=db5000272134.hosting-data.io;dbname=dbs265618;charset=utf8mb4;port=3306';
        $user = 'dbu438447';
        $pass = 'Ferreyra24111972.';
>>>>>>> modificaciones varias

        try{
            $this->conn = new PDO($dsn,$user,$pass);
        } catch (Exception $e){
            echo "La conexion a la base de datos fallo: " .$e->getMessage();
        }
        
    }

    public function guardarSorbo(Sorbo $sorbo): Sorbo
    {
        $db = $this->conn;
        $query = $db->prepare("INSERT INTO sorbo VALUES(default, :donador, :numero_de_sorbo, :fecha, :establecimiento, :organizador, :causa)");
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
<<<<<<< HEAD
    }

    public function contarSorbos($causa): int
    {
        $db = $this->conn;
    
        $query = $db->prepare("SELECT * FROM sorbo WHERE causa = '$causa'");
        $query->execute();
        $cantidad = $query->rowCount();
            
        return $cantidad;
    }

    public function guardarCausa(Causa $causa): Causa
    {
        $db = $this->conn;
        $query = $db->prepare("Insert into causa0 values(default, :nombre)");
        $query->bindvalue(":nombre", $causa->getNombre());

        try {

            $query->execute();

        } catch (Exception $e) {
            echo "La conexion a la base de datos fallo:" . $e->getMessage();
        }
        return $causa;
    }
=======
    }

    public function contarSorbos($causa): int
    {
        $db = $this->conn;
>>>>>>> modificaciones varias
    
        $query = $db->prepare("SELECT * FROM sorbo WHERE causa = '$causa'");
        $query->execute();
        $cantidad = $query->rowCount();
            
        return $cantidad;
    }
}
