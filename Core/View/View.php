<?php
namespace Core\View;
class View {
    public $var;
    public static function render($view){
        include $view.".php";
        return new View();
    }
    public function with($var_){
        echo 'testing nested';
    }
}

