<?php
namespace Core\App;
use Core\Model as Model;
class Application {
    private $request;
    private $controller;
    private $controllerMethod;
    private $controllerMethodParam;
    private $userid;
    private $role;
    
    public function __get($name) {
        return $this->$name;
    }

    public function Run(){
        $this->request=$_GET["req"];
        if(isset($_SESSION['uid'])){
            $this->userid = $_SESSION['uid'];
        }
        $arrayReq = explode("/", $this->request);
        $reqSegment = count($arrayReq);
        
        if($reqSegment<2){
            $this->controllerMethod="Index";
        }
        else{
            $this->controllerMethod=$arrayReq[1];
        }
        if($arrayReq[0]==""){
            header('location:home');
        }
        else{
            $this->controller= "Core\\Controller\\".$arrayReq[0]."Controller";
            $ngin = new $this->controller;
            $m=  $this->controllerMethod;
            $ngin->$m();            
        }
    }
    public static function Auth(){
        if (isset($_SESSION['uid']) || !empty($_SESSION['uid'])) {
            return TRUE;
        }
        return FALSE;
    }
    public function defineUser($id){
        $_SESSION['uid']=$id;
        $this->userid=$id;
        $user = new Model\user();
        
    }
}
