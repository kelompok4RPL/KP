<?php
namespace Core\Database;
class DataDriver {
    private $config = [
	"dbEngine" => "mysqli",
	"host" => "localhost",
	"username" => "root",
	"password" => "",
	"db"=>"kp_rpl",
	"port" => ""
    ];
    private $dbPrefix;
    private $host;
    private $username;
    private $password;
    private $port;
    private $dbName;
    private $dbCon;
    private $record = [];    
    public $dbQuery;
    private $status;
    private $dataRow = [];
    private $pQuery;
    private $pFetchAssoc;
            
    function __construct($query=NULL){
        $this->host = $this->config['host'];
	$this->username = $this->config['username'];
	$this->password = $this->config['password'];
	$this->port = $this->config['port'];
	$this->dbName = $this->config['db'];
        $dbengine = $this->config['dbEngine'];
        $this->dbQuery=$query;
        
	if($dbengine=="mysqli"){
            $this->dbPrefix="mysqli";
	}
	else if($dbengine=="postgre"){
            $this->dbPrefix="pg";
	}
	else{
            $this->dbPrefix=$dbengine;
        }
        $this->pQuery=$this->dbPrefix."_query";
        $this->pFetchAssoc=$this->dbPrefix."_fetch_assoc";
        $this->OpenConnection();
    }
    function tes(){
        $x = $this->pQuery;
        $x();
    }
            
    function OpenConnection(){
        $fx=$this->dbPrefix."_connect";
        $_host=$this->host;
        $_user=$this->username;
        $_password=$this->password;
        $_db=$this->dbName;
        $_port=$this->port;
        if($_port!=""){
            $this->dbCon=$fx("host=$_host user=$_user password=$_password dbname=$_db port=$_port");
        }
        else{
            $this->dbCon=$fx($_host,$_user,$_password,$_db); 
        }
        return $this->dbCon;
    }
    
    function insertQuery($tabel){
        $this->dbQuery = "INSERT INTO ".$tabel." SET ";
        foreach ($this->record as $key => $value){
            $this->dbQuery.= "$key = '$value', ";
        }
        $this->dbQuery = rtrim($this->dbQuery, ', ');
        //$this->status = $query($this->dbCon,$this->dbQuery);
       // return $this->status;
        return new DataDriver($this->dbQuery);
    }
    
    function selectQuery($tabel, array $kolom=NULL){
        if($kolom!=NULL){
            $this->dbQuery="SELECT ";
            foreach ($kolom as $kol){
                $this->dbQuery.="$kol, ";
            }
            $this->dbQuery = rtrim($this->dbQuery, ', ');
            $this->dbQuery.=" FROM ".$tabel;
        }
	else {
            $this->dbQuery = "SELECT * FROM ".$tabel;
        }
        return new DataDriver($this->dbQuery);
    }
    function deleteQuery($tabel){
       $this->dbQuery="DELETE FROM $tabel";
       return new DataDriver($this->dbQuery);
    }
    function Limit($limit, $posisi=NULL){
	if (isset($posisi)) {
            $this->dbQuery .=" LIMIT ".$posisi.", ".$limit."";
        }
        else {
            $this->dbQuery .= " LIMIT ".$limit."";
        }
        return new DataDriver($this->dbQuery);
    }
    function where (array $kolom){
        $this->dbQuery.= " WHERE";
        foreach ($kolom as $key => $value){
            $this->dbQuery.= " $key = '$value' AND";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        return new DataDriver($this->dbQuery);
    }
    function updateQuery($tabel){
        $this->dbQuery = "UPDATE ".$tabel." SET ";
        foreach ($this->record as $key => $value){
            $this->dbQuery.= "$key ='$value',";
        }
        $this->dbQuery = rtrim($this->dbQuery, ',');
       return new DataDriver($this->dbQuery);
    }
    function hapusSemua($tabel){
	$pQuery=$this->dbPrefix."_query";
        $this->dbQuery = "DELETE FROM ".$tabel;
	$this->status = $pQuery($this->dbCon,$this->dbQuery);
    }
    function siapkanRecord(array $_record){
        $this->record = $_record;
    }
    function selectMultiple(array $tabel, array $koloms){
        $this->dbQuery="SELECT ";
        foreach ($koloms as $kol){
            $this->dbQuery.="$kol, ";
        }
        $this->dbQuery = rtrim($this->dbQuery, ', ');
        $this->dbQuery.=" FROM ";
        foreach ($tabel as $tab){
            $this->dbQuery.="$tab, ";
        }
        $this->dbQuery = rtrim($this->dbQuery, ', ');
        return new DataDriver($this->dbQuery);
    }
    function join(array $koloms){
        $this->dbQuery .=" AND";
        foreach ($koloms as $key => $value){
            $this->dbQuery.= " $key = $value AND";
        }
        $this->dbQuery = rtrim($this->dbQuery, 'AND');
        return new DataDriver($this->dbQuery);
    }
            function get(){
        $query = $this->pQuery;
        $pf=  $this->pFetchAssoc;
        $this->status = $query($this->dbCon,$this->dbQuery);
        while ($row= $pf($this->status)) {
            $this->dataRow[]=$row;
        }
        //echo $this->dbQuery;
        return $this->dataRow;
        
    }
    function eksekusi(){
        $query = $this->pQuery;
        $this->status = $query($this->dbCon,$this->dbQuery);
        return $this->status;
        //echo $this->dbQuery;
    }
}
