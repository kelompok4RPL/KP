<?php
/**
 * Seperti namanya, kelas ini dibuat untuk mempermudah penulisan script
 * yang menangani operasi CRUD, dengan fungsi yang ringkas sehinggga dapat mempercepat 
 * pekerjaan dalam coding, hehehe
 * @author MN12 Matius Nugroho
 */
class Model {
    private $namaTabel;
	private $primaryKey;
    private $record = array();
    public $dbQuery;
    public $status;
    public $dataRow = array();
    
    function __construct($_namaTabel) {
        $this->namaTabel = $_namaTabel;
    }
    
    function siapkanRecord(array $_record){
        $this->record = $_record;
    }
    
    function simpan() {
        $this->dbQuery = "INSERT INTO ".$this->namaTabel." SET ";
        foreach ($this->record as $key => $value) {
            $this->dbQuery.= "$key = '$value', ";
        }
        $this->dbQuery = rtrim($this->dbQuery, ', ');
        $this->status = mysql_query($this->dbQuery);
    }
    
    function ambilSemua() {
        $this->dbQuery = "SELECT * FROM ".$this->namaTabel."";
        $this->status = mysql_query($this->dbQuery);
        while ($row=  mysql_fetch_assoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }
	
	function ambil($id) {
        $this->dbQuery = "SELECT * FROM ".$this->namaTabel." where ".$this->primaryKey." = ".$id."";
        $this->status = mysql_query($this->dbQuery);
        while ($row=  mysql_fetch_assoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }
    
    function ambilDataDenganKondisi (array $kondisi) {
        $this->dbQuery = "SELECT * FROM ".$this->namaTabel." WHERE ";
        foreach ($kondisi as $key => $value) {
            $this->dbQuery .= "$key = '$value' AND";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        $this->status = mysql_query($this->dbQuery);
        while ($row=  mysql_fetch_assoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }

    
    function hapusSemua () {
        $this->dbQuery = "DELETE FROM ".$this->namaTabel."";
    }
    
    function hapusDenganKondisi (array $kondisi) {
        $this->dbQuery = "DELETE FROM ".$this->namaTabel." WHERE ";
        foreach ($kondisi as $key => $value) {
            $this->dbQuery .= "$key = '$value' OR ";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'OR');
        $this->status = mysql_query($this->dbQuery);
    }
}

?>