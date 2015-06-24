<?php
namespace Core\Model;
use Core\DataBase\DataDriver as DataDriver;
use ReflectionClass;
class Model {
    private $namaTabel;
    public $primaryKey="id";
    private $kolomDanValue=[];
    private $DataDriver;
    private $updatable;
    //private $kolomPointer;
    function __construct ($data=NULL,$updatable=FALSE) {
	$this->namaTabel = get_class($this);
        $reflect=new ReflectionClass($this);
	$this->namaTabel = $reflect->getShortName();
        $this->DataDriver=new DataDriver();
        $koloms=$this->DataDriver->selectQuery("INFORMATION_SCHEMA.COLUMNS",["COLUMN_NAME"])->where(["table_name"=>"$this->namaTabel"])->get();
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
        //echo $this->DataDriver->dbQuery;
        if(count($data)<1){
            return NULL;
        }
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
    function where(array $kondisi){
       $this->DataDriver = new DataDriver();
       $this->DataDriver->OpenConnection();
       $data = $this->DataDriver->selectQuery($this->namaTabel)->where($kondisi)->get();
       $selfCollection =[];
       
       foreach ($data as $data){
           $selfCollection[]=new $this($data,true);
       }
       return $selfCollection;
    }
    function relasiDengan($tabel,$fk,$local_key){
        $this->DataDriver = new DataDriver();
        $this->DataDriver->OpenConnection();
        $data = $this->DataDriver->selectMultiple([$tabel,$this->namaTabel],[$tabel.".*"])->where([$this->namaTabel.".".$this->primaryKey=>$this->kolomDanValue[$this->primaryKey]])->join([$tabel.".".$fk=>$this->namaTabel.".".$local_key])->get();
        $model = "Core\\Model\\".$tabel;
        $modelCollection=[];
        foreach ($data as $data){
            $modelCollection[]=new $model($data, TRUE);
        }
        return $modelCollection;
        //echo var_dump($modelCollection);
    }
    
}