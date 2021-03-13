<?php

namespace Controllers ;

use Models\UsersModel;

class AuthController extends Controller{

	public function login(){
        if (isset($_POST['username'])){
            $username = $_POST['username'];
            $passwd = sha1($_POST['passwd']);
            $userCredentials = (new UsersModel)->getUser($username,$passwd);
            if(isset($userCredentials)){
                $this->setCookies($userCredentials) ;
                $this->setSession($userCredentials);
                $this->redirectAuth() ;
            }
            else{
                $this->throwError('login');
            };
        }
	}

    private function setCookies($userCredentials){
        setcookie($_ENV['PREFIX'].'/id',$userCredentials->__get('id')) ;
        setcookie($_ENV['PREFIX'].'/username',$userCredentials->__get('username')) ;
        setcookie($_ENV['PREFIX'].'/hash_passwd',$userCredentials->__get('passwd')) ;
        setcookie($_ENV['PREFIX'].'/user_type',$userCredentials->__get('type')) ;
    
    }

    private function setSession($userCredentials){
        $_SESSION['username'] = $userCredentials->__get('username') ;
        $_SESSION['passwd'] = $userCredentials->__get('passwd') ;
    }

    private function unsetCookies(){
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
    }

    public function logout(){
        $this->unsetCookies();
        header('Location: '.$_ENV['APP_HOST'].'/login');
    }





}