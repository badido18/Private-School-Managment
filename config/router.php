<?php
    
    $router = new AltoRouter() ;

    $router->map('GET','/','Controllers\IndexController@render','Accueil');  