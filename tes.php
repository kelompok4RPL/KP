<?php
include 'Autoload.php';
/*use Core\DataBase\DataDriver as DB;
$data=[
    "nama"=>"Matius",
    "umur"=>"12"
];
$db = new DB();
$db->siapkanRecord($data);
echo var_dump($db->selectQuery("INFORMATION_SCHEMA.COLUMNS",["COLUMN_NAME"])->where(["table_name"=>"tes"])->get());*/
use Core\Model as Model;
$mhs = new Model\Tes();
$mhs->hapus();
$mhs1=$mhs->getDariPrimary(69);
$mhs1->nm=77;
$mhs->x = 100;
$mhs1->hapus();
//var_dump($mhs1);

