<?php
    
    $router = new AltoRouter() ;
    $router->map('GET','/','Controllers\IndexController@render','Accueil');
    $router->map('GET','/login','Controllers\LoginController@render','SignIn');    

    //Admin routes

    $router->map('GET','/admin','Controllers\Admin\AdminController@render','Admin panel');  
