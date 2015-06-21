<?php
namespace Core\Model;
use Core\App\DataBase\DataDriver as DataDriver;
class Model {
    private $namaTabel;
    private $primaryKey;
    private $kolomDanValue=[];
    private $DataDriver;
    private $updatable;
    private $kolomPointer=[];
            function __construct () {
	$this->namaTabel = get_class($this);
    }
    
    function simpan(){
        
	$this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        $this->DataDriver->siapkanRecord($this->kolomDanValue);
        if($this->updatable){
            
        }
        else{
            $this->DataDriver->insertQuery($this->namaTabel);
        }
    }
    
    function getDariPrimary($value){
        $this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        $this->DataDriver->siapkanRecord([$this->primaryKey =>  $this->kolomDanValue[$this->primaryKey]]);
        $this->DataDriver->selectQuery($this->namaTabel,  $this->DataDriver->record);
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