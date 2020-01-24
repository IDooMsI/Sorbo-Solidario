<?php
class Db{
    protected $com;   
    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=sorbo_solidario;charset=utf8mb4;port=3306';
        $user = 'root';
        $pass = '';

        try{
            $this->com = new PDO($dsn,$user,$pass);
        } catch (Exception $e){
            echo "La conexion a la base de datos fallo: " .$e->getMessage();
        }
        
    }

    public function guardarSorbo(Sorbo $sorbo){
        $db = $this->com;
        $query = $db->prepare("INSERT INTO sorbos VALUES(default, :donador, :numero_de_sorbo, :fecha, :establecimiento, :organizador,NULL)");
        $query->bindvalue(":donador", $sorbo->getDonador(), PDO::PARAM_STR);
        $query->bindvalue(":numero_de_sorbo", $sorbo->getNumero_de_sorbo());
        $query->bindValue(":fecha", $sorbo->getFecha());
        $query->bindValue(":establecimiento", $sorbo->getEstablecimiento());
        $query->bindValue(":organizador",$sorbo->getOrganizador());
        // $query->bindValue(":id_causa",$sorbo->getCausa());
        $id = $db->lastInsertId();
        $sorbo->setId($id);
        try {
            $query->execute();
        } catch (Exception $e) {
            echo "La conexion a la base de datos fallo:" . $e->getMessage();
        }
        return $sorbo;
        var_dump($sorbo);
    }

    public function traerSorbos(Causa $causa){
        $db = $this->com;
        $query = $db->prepare("SELECT * FROM sorbos WHERE $causa->getNombre() = :causa");
        $query->execute();

        $sorbosArray = $query->fetchAll();
        $sobroClass = [];

        foreach($sorbosArray as $sorbo){
            $sobroClass[] = new Sorbo($sorbo["donador"], $sorbo["numero_de_sorbo"], $sorbo["fecha"], $sorbo["establecimiento"], $sorbo["organizador"], $sorbo["id_causa"]);
        }

        return $sobroClass;
    }

    public function guardarCausa(causa $causa){
        $db = $this->com;
        $query = $db->prepare("Insert into causas values(default, :nombre)");
        $query->bindvalue(":nombre", $causa->getNombre());

        $id = $db->lastInsertId();
        $causa->setId(id);

        $query->execute();
    }
    
    public function traerCausas($id){
        $db = $this->com;
        $query = $db->prepare("SELECT * FROM causas WHERE id = :id");
        $query-> bindvalue(":id",$id);
        $query->execute();

        $causasFormatoArray = $query->fetch();
        if ($causasFormatoArray) {
            return new Causa($causasFormatoArray["id"]);
        }
    }
}

?>