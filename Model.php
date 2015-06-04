<?php
namespace Model;
use DataDriver;
class Model {
    private $namaTabel;
    private $kolomDanValue=[];
    private $DataDriver;
    private $updatable;
    function __construct () {
	$this->namaTabel = get_class($this);
	$this->DataDriver = new \DataDriver();
    }
	
    function getDataRow(){
        return $this->dataRow;
    }
    
    function simpan(){
        
    }
    
    
    function ambilDenganLimit($limit, $posisi=NULL){
        $pQuery=$this->dbPrefix."_query";
	$pFetchAssoc=$this->dbPrefix."_fetch_assoc";
	if (isset($posisi)) {
            $this->dbQuery = "SELECT * FROM ".$this->namaTabel." LIMIT ".$posisi.", ".$limit."";
        }
        else {
            $this->dbQuery = "SELECT * FROM ".$this->namaTabel." LIMIT ".$limit."";
        }
        $this->status = $pQuery($this->dbCon,$this->dbQuery);
        while ($row=  $pFetchAssoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }
    
    function ambilDataDenganKondisi(array $kondisi){
        $this->dbQuery = "SELECT * FROM ".$this->namaTabel." WHERE ";
        foreach ($kondisi as $key => $value) {
            $this->dbQuery .= "$key = '$value' AND";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        $this->status = mysqli_query($this->dbCon,$this->dbQuery);
        while ($row=  mysqli_fetch_assoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }
    
    function editBerdasarkan(array $kolom){
	$pQuery=$this->dbPrefix."_query";
        $this->dbQuery = "UPDATE ".$this->namaTabel." SET ";
        foreach ($this->record as $key => $value){
            $this->dbQuery.= "$key ='$value',";
        }
        $this->dbQuery = rtrim($this->dbQuery, ',');
        $this->dbQuery.= " WHERE";
        foreach ($kolom as $key => $value){
            $this->dbQuery.= " $key = '$value' AND";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        $this->status = $pQuery($this->dbCon,$this->dbQuery);
    }
    
    function hapusSemua(){
	$pQuery=$this->dbPrefix."_query";
        $this->dbQuery = "DELETE FROM ".$this->namaTabel."";
	$this->status = $pQuery($this->dbCon,$this->dbQuery);
    }
    
    function hapusDenganKondisi(array $kondisi){
        $pQuery=$this->dbPrefix."_query";
        $this->dbQuery = "DELETE FROM ".$this->namaTabel." WHERE ";
        foreach ($kondisi as $key => $value) {
            $this->dbQuery .= "$key = '$value' AND ";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        $this->status = $pQuery($this->dbCon,$this->dbQuery);
    }
}