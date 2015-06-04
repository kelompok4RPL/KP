<?php
namespace DataDriver;
class DataDriver {
    private $config = [
	"dbEngine" => "postgre",
	"host" => "localhost",
	"username" => "postgres",
	"password" => "matiuslogin",
	"db"=>"labs",
	"port" => "5432"
    ];
    private $dbPrefix;
    private $host;
    private $username;
    private $password;
    private $port;
    private $dbName;
    private $dbCon;
    private $record = [];    
    private $dbQuery;
    private $status;
    private $dataRow = [];
    private $pQuery;
    private $pFetchAssoc;
            
    function __construct(){
        $this->host = $this->config['host'];
	$this->username = $this->config['username'];
	$this->password = $this->config['password'];
	$this->port = $this->config['port'];
	$this->dbName = $this->config['db'];
        $dbengine = $this->config['dbEngine'];
        
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
    }
    
    function Connection(){
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
        $this->status = $this->pQuery($this->dbCon,$this->dbQuery);
        return $this->status;
    }
    
    function selectQuery($tabel){
	$this->dbQuery = "SELECT * FROM ".$this->namaTabel."";
        $this->status = $this->pQuery($this->dbCon,$this->dbQuery);
        while ($row= $this->pFetchAssoc($this->status)) {
            $this->dataRow[]=$row;
        }
        return $this->dataRow;
    }
    function siapkanRecord(array $_record){
        $this->record = $_record;
    }
}
