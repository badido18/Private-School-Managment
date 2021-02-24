<?php

$router = new AltoRouter() ;

//public routes
$router->map('GET','/','Controllers\HomeController::render','Accueil');
$router->map('GET','/accueil','Controllers\HomeController::render','Home');
$router->map('GET','/contact','Controllers\ContactController::render','Contact');   
$router->map('GET','/presentation','Controllers\PresentationController::render','Presentation');
$router->map('GET','/education','Controllers\EducLevelController::render','EducLevel'); 
$router->map('GET','/restauration','Controllers\FoodMenuController::render','FoodMenu'); 
$router->map('GET','/article/[i:id]','Controllers\ArticleController::render','Article');  
$router->map('GET','/enseignants','Controllers\TeacherController::render','Teachers'); 
$router->map('GET','/emplois','Controllers\ScheduleController::render','Schedules'); 
//withauth routes
$router->map('GET','/login','Controllers\LoginController::render','Login'); 
$router->map('GET','/login/[a:message]','Controllers\LoginController::render','ErrorLogin'); 
$router->map('GET','/student','Controllers\StudentSpaceController::render','StudentSpace'); 
$router->map('GET','/parent','Controllers\ParentSpaceController::render','ParentSpace'); 
$router->map('POST','/auth','Controllers\AuthController::login','Auth'); 
$router->map('POST','/logout','Controllers\AuthController::logout','Logout');
//admin routes
$router->map('GET','/admin','Controllers\Admin\AdminController::render','Admin panel');  
$router->map('GET','/admin/articles/managment','Controllers\Admin\ArticlesManagmentController::render','Articles panel');  
$router->map('POST','/admin/articles/add','Controllers\Admin\ArticlesManagmentController::addArticle','Article add');   
$router->map('POST','/admin/articles/delete','Controllers\Admin\ArticlesManagmentController::deleteArticle','Article delete');  
$router->map('POST','/admin/articles/update','Controllers\Admin\ArticlesManagmentController::updateArticle','Article update');  
$router->map('GET','/admin/users/managment','Controllers\Admin\UsersManagmentController::render','users panel');  
//non implemented routes
$router->map('GET','/ens','Controllers\TeacherController::renderDashboard','Teacher'); 