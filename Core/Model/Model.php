<?php
namespace Core\Model;
use Core\DataBase\DataDriver as DataDriver;
use ReflectionClass;
class Model {
    private $namaTabel;
    private $primaryKey="id";
    private $kolomDanValue=[];
    private $DataDriver;
    private $updatable;
    private $kolomPointer;
    function __construct ($data=NULL,$updatable=FALSE) {
	$this->namaTabel = get_class($this);
        $reflect=new ReflectionClass($this);
	$this->namaTabel = $reflect->getShortName();
        $this->DataDriver=new DataDriver();
        $koloms=$this->DataDriver->selectQuery("INFORMATION_SCHEMA.COLUMNS",["COLUMN_NAME"])->where(["table_name"=>"tes"])->get();
        $this->updatable=$updatable;
        if($data==NULL){
            foreach ($koloms as $value) {
                $this->kolomDanValue[$value["COLUMN_NAME"]]="";
            }
        }
        else{
           foreach ($koloms as $value) {
                $this->kolomDanValue[$value["COLUMN_NAME"]]=$data[$value["COLUMN_NAME"]];
            } 
        }
    }
    function __set($name, $value) {
        $this->kolomDanValue[$name]=$value;
    }
    
    function __get($name) {
        return $this->kolomDanValue[$name];
    }
    function simpan(){
	$this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        $this->DataDriver->siapkanRecord($this->kolomDanValue);
        if($this->updatable){
            $data=$this->kolomDanValue;
            unset($data[$this->primaryKey]);
            $this->DataDriver->siapkanRecord($data);
            $this->DataDriver->updateQuery($this->namaTabel)->where([$this->primaryKey=>  $this->kolomDanValue[$this->primaryKey]])->eksekusi();
        }
        else{
            $this->DataDriver->siapkanRecord($this->kolomDanValue);
            $this->DataDriver->insertQuery($this->namaTabel)->eksekusi();
        }
    }
    
    function getDariPrimary($value){
        $this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        $data = $this->DataDriver->selectQuery($this->namaTabel)->where([$this->primaryKey=>$value])->get();
        return new $this($data[0],TRUE);
    }
            
    function hapus(){
        $this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        if ($this->kolomDanValue[$this->primaryKey]==""){
            $this->DataDriver->deleteQuery($this->namaTabel)->eksekusi();
        }
        else{
           $this->DataDriver->deleteQuery($this->namaTabel)->where([$this->primaryKey=>$this->kolomDanValue[$this->primaryKey]])->eksekusi();
        }
        
    }
}