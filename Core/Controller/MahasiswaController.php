<?php

namespace Core\Controller;
use Core\View\View as View;
class MahasiswaController extends Controller{
    public function Index() {
        $mhs = new \Core\Model\Mahasiswa();
        $mhsx = $mhs->getDariPrimary('1110');
        echo var_dump($mhsx);
    }
    public function update($param) {
        
    }
    public function edit($param) {
        
    }
    public function delete($param) {
        
    }
    public function daftarkp(){
        View::render('daftarkp');
    }
}


