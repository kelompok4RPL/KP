<?php
namespace Core\Controller;
use Core\View\View as View;
class indexController extends Controller{
    public function index() {
        global $isi;
        $isi = "Isi dari index controller";
        View::render("Coba")->tes();
    }
    public function update($param) {
        
    }
    public function edit($param) {
        
    }
    public function delete($param) {
        
    }
}
