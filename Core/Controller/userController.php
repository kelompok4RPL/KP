<?php
namespace Core\Controller;
use Core\View\View as View;
class userController extends Controller{
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
    public function login(){
        $nim = $_POST['nim'];
        $password = $_POST['password'];
        $user = new \Core\Model\user();
        $selectedUser = $user->getDariPrimary("matiusnugroho");
        if($selectedUser!=NULL){
            $userx = $user->where(["password"=>$password,username=>$selectedUser->username]);
            if($userx!==NULL){
                $_SESSION['role']=$userx->role;
                $_SESSION['uid']=$userx->uid;
            }
            $_SESSION['error']="Password salah";
        }
        $_SESSION['error']="Username tidak ditemukan";
        echo var_dump($nim);
        //header('location:../home');
    }
    public function logout(){
        session_destroy();
        header('location:../home');
    }
}

