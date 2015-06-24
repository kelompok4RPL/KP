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
use Core\Model\Model as Model;
$mhs = new Model\user();
$mhsx = $mhs->getDariPrimary("matiusnugroho");
echo $mhsx->role;

/*$x="Mahasiswa";
$role = "Core\\App\\Roles\\".$x."Role";
$xc=new $role();
//var_dump($xc);

$user = new Model\user();
$user = $user->getDariPrimary(1110962023);
echo var_dump($user);*/

//var_dump($mahasiswas);

