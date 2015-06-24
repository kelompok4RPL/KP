<?php
namespace Core\App\Roles;
use Core\App\Role as Role;

class MahasiswaRole extends Role{
    public $Create =[
        "mahasiswa",
        "daftar_kp"
    ];
    public $Read=[
        "mahasiswa",
        "informasiKP",
        "pembimbing"
    ];
    public $Update=[
        "mahasiswa",
        "daftar_kp"
    ];
    public $Delete=[];
}

