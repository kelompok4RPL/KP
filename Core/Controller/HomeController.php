<?php
namespace Core\Controller;
use Core\View\View as View;
class HomeController extends Controller{
    public function Index() {
        global $isi;
        $isi = "Isi dari index controller";
        View::render("home");
    }
    public function update($param) {
        
    }
    public function edit($param) {
        
    }
    public function delete($param) {
        
    }
}
