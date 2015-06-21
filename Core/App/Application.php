<?php
namespace Core\App;
class Application {
    private $request;
    private $controller;
    private $controllerMethod;
    private $controllerMethodParam;
    public function Run(){
        $this->request=$_GET["req"];
        $arrayReq = explode("/", $this->request);
        $reqSegment = count($arrayReq);
        if($reqSegment>0){
            echo var_dump($arrayReq);
        }
        else{
            
        }
        
        //$c->index();
    }
}
