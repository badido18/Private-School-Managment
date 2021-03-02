<?php

namespace Controllers ;

use Models\UsersModel;

class Controller {

    private $restrictedRedirectionRoutes = ['/login','/login/error'] ;

	protected function view($view) {
		require_once __DIR__.'/../Views/'.$view.'.php' ;
	} 

	protected function NotFound(){
		//http_response_code(404);
		$this->view("404");
		exit;
	}

	protected function verifData($data){
		if (empty($data))
			$this->NotFound();
		return ;
	}

    protected function returnJson($data){
        $response['success']= TRUE ;
        $response['data'] =  $data ;
        header('Content-Type: application/json');
        echo json_encode($response) ;
    }

    protected function verifyCookie(){
        if(isset($_COOKIE[$_ENV['PREFIX'].'/username']))
            return (new UsersModel)->verifyUser($_COOKIE[$_ENV['PREFIX'].'/username'],$_COOKIE[$_ENV['PREFIX'].'/hash_passwd'],$_COOKIE[$_ENV['PREFIX'].'/user_type']) ;
        return FALSE ;
    }

    public function redirectAuth($userCredentials = NULL){
        $type = $userCredentials ? $userCredentials->__get('type') : $_COOKIE[$_ENV['PREFIX'].'/user_type'] ;
        switch ($type) {
            case 'student':
                header('Location: '.$_ENV['APP_HOST'].'/student');
                break;
            case 'teacher' :
                header('Location: '.$_ENV['APP_HOST'].'/ens');
                break;
            case 'parent' :
                header('Location: '.$_ENV['APP_HOST'].'/parent');
                break;
            case 'admin' :
                header('Location: '.$_ENV['APP_HOST'].'/admin');
                break;
            default:
                header('Location: '.$_ENV['APP_HOST'].'/login');
                break;
        }
    }

    public function redirect($linkFromRoot){
        header('Location: '.$_ENV['APP_HOST']."/$linkFromRoot");
    }

    public function redirectToReferer($nextRoute=''){
        header('Location: '.$_SERVER['HTTP_REFERER'].$nextRoute);
    }

    public function throwError($route=NULL){
        if(isset($route))
            header('Location: '.$_ENV['APP_HOST']."/$route/error");
        else
            header('Location: '.$_SERVER['REQUEST_URI']."/error");
    }

	public function verifAuth($userType){
		if($this->verifyCookie()){
			if($_COOKIE[$_ENV['PREFIX'].'/user_type']!== $userType){
				$this->redirectAuth();
			}
		}
		else{
            if(!in_array($_SERVER["REQUEST_URI"],$this->restrictedRedirectionRoutes))
                header('Location: '.$_ENV['APP_HOST'].'/login');
        }
			
	}

    public function getCookie($name){
        return $_COOKIE[$_ENV['PREFIX']."/$name"] ;
    }
}

