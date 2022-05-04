<?php   

class BDD{
    private $dbh;

    public function __construct() {
        try{
            $this->dbh = new PDO('mysql:dbname=serie;host=127.0.0.1;',"root","ROOT");
        } catch (PDOException $e) {
             print "Connexion échoué : " . $e->getMessage();
        }
            }

   
    public function getThemes() {
        $res = $this->dbh->query('SELECT * from theme', PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }
    
    public function selectLogin(){
        $res = $this->dbh->query('SELECT login, mdp, fk_role FROM user join role on fk_role = idrole where login = :login and mdp = :mdp ');
        return $res->fetch();
    }

    public function insertSerie($nom, $nbepisode, $Synopsis,$theme) {
        $sql = "INSERT INTO serie(nom, nbEpisode,  synopsis, FK_ID_Theme ) VALUES (:nom, :nbepisode, :Synopsis, :theme)";
        $req = $this->dbh->prepare($sql);
        $req->execute(array(":nom" => $nom, ":nbepisode" => $nbepisode, ":Synopsis" => $Synopsis, ":theme" => $theme));
    }

    public function getSeries() {
        $res = $this->dbh->query('SELECT s.id as id, s.nom as nomSerie, s.nbEpisode as nbrEpisode, s.synopsis as synopsis, th.nomT as nomTheme from serie s left join theme th on s.FK_ID_Theme = th.id' , PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }
    public function selectSeries($id) {
        $res = $this->dbh->query('SELECT s.id as id, s.nom as nomSerie, s.nbEpisode as nbrEpisode, s.synopsis as synopsis, th.nomT as nomTheme from serie s left join theme th on s.FK_ID_Theme = th.id where s.id = '.$id, PDO::FETCH_ASSOC);
        return $res->fetch();
    }
    public function getEpisodes() {
        $res = $this->dbh->query('SELECT e.id as id, e.nom as nomEpisode, e.resumer as resumer, e.durée as durée, s.id as idSerie from episode e left join serie s on e.fk_id_serie = s.id' , PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }
    public function InsertEpisodes($id,$nom,$resumer,$durer,$fk_id_serie) {
        $sql = "INSERT INTO episode(id,nom,resumer,durée,fk_id_serie) VALUES (:id,:nom,:resumer,:durer,:fk_id_serie)";
        $req = $this->dbh->prepare($sql);
        $req->execute(array(":id" => $id , ":nom" => $nom ,":resumer" => $resumer ,":durer" => $durer, ":fk_id_serie" => $fk_id_serie));
        // var_dump($req->errorinfo());
    }
    public function Insert($theme) {
        $sql = "INSERT INTO theme(nomT) VALUES (:theme)";
        $req = $this->dbh->prepare($sql);
        $req->execute(array(":theme" => $theme));
    }
    public function Update($theme,$new) {
        $sql = "UPDATE theme SET nomT = :new where nomT = :theme";
        $req = $this->dbh->prepare($sql);
        $req->execute(array(":theme" => $theme , ":new" => $new));
    }
    public function Delete($theme) {
        $sql = "DELETE FROM theme WHERE nomT = :theme";
        $req = $this->dbh->prepare($sql);
        $req->execute(array(":theme" => $theme));
        
    }
}

    

?>