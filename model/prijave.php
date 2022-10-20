<?php
class Prijava {
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id = null, $predmet = null, $katedra = null, $sala = null, $datum = null) {
        $this->id = $id;
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    public static function getAll(mysqli $conn) {
        $query = "SELECT * FROM prijave";
        return $conn->query($query);
    }
}
?>