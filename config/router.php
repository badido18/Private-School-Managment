<?php

$router = new AltoRouter() ;

//public routes
$router->map('GET','/','Controllers\HomeController::render','Accueil');
$router->map('GET','/accueil','Controllers\HomeController::render','Home');
$router->map('GET','/home/articles/[i:page]','Controllers\HomeController::render','Home articles page');
$router->map('GET','/contact','Controllers\ContactController::render','Contact');   
$router->map('GET','/presentation','Controllers\PresentationController::render','Presentation');
$router->map('GET','/education/[i:level]','Controllers\EducLevelController::render','EducLevel'); 
$router->map('GET','/education/[i:level]/articles/[i:page]','Controllers\EducLevelController::render','EducLevel articles'); 
$router->map('GET','/restauration','Controllers\FoodMenuController::render','FoodMenu'); 
$router->map('GET','/article/[i:id]','Controllers\ArticleController::render','Article');  
$router->map('GET','/enseignants/[i:level]','Controllers\TeacherController::render','Teachers'); 
$router->map('GET','/emplois/[i:level]','Controllers\ScheduleController::render','Schedules'); 
$router->map('GET','/emplois/[i:level]/[i:classid]','Controllers\ScheduleController::render','Schedules class');
$router->map('GET','/space/[a:category]','Controllers\SpacePageController::render','Space Page');
//withauth routes
$router->map('GET','/login','Controllers\LoginController::render','Login');  
$router->map('GET','/login/[a:message]','Controllers\LoginController::render','ErrorLogin'); 
$router->map('GET','/student','Controllers\StudentSpaceController::render','StudentSpaceLogged'); 
$router->map('GET','/parent','Controllers\ParentSpaceController::render','ParentSpaceLogged'); 
$router->map('GET','/ens','Controllers\TeacherController::renderDashboard','Teacher'); 
$router->map('POST','/auth','Controllers\AuthController::login','Auth'); 
$router->map('POST','/logout','Controllers\AuthController::logout','Logout');
//admin routes
$router->map('GET','/admin','Controllers\Admin\AdminController::render','Admin panel');  
//articles managment
$router->map('GET','/admin/articles/managment','Controllers\Admin\ArticlesManagmentController::render','Articles panel');  
$router->map('GET','/admin/articles/managment/[i:page]','Controllers\Admin\ArticlesManagmentController::render','Articles panel pages');  
$router->map('POST','/admin/articles/add','Controllers\Admin\ArticlesManagmentController::addArticle','Article add');   
$router->map('POST','/admin/articles/delete','Controllers\Admin\ArticlesManagmentController::deleteArticle','Article delete');  
$router->map('POST','/admin/articles/update','Controllers\Admin\ArticlesManagmentController::updateArticle','Article update');  
//users managment
$router->map('GET','/admin/users/managment','Controllers\Admin\UsersManagmentController::render','Users panel');  
$router->map('POST','/admin/users/add','Controllers\Admin\UsersManagmentController::addUser','User add');   
$router->map('POST','/admin/users/delete','Controllers\Admin\UsersManagmentController::deleteUser','User delete');  
$router->map('POST','/admin/users/update','Controllers\Admin\UsersManagmentController::updateUser','user update');  
//teachers managment
$router->map('GET','/admin/teachers/managment','Controllers\Admin\TeachersManagmentController::render','etachs panel');  
$router->map('POST','/admin/teachers/add','Controllers\Admin\TeachersManagmentController::addTeacher','etacr add');   
$router->map('POST','/admin/teachers/delete','Controllers\Admin\TeachersManagmentController::deleteTeacher','tec delete');  
$router->map('POST','/admin/teachers/update','Controllers\Admin\TeachersManagmentController::updateTeacher','tec update');   
//Contact managment
$router->map('GET','/admin/contacts/managment','Controllers\Admin\ContactManagmentController::render','Contacts panel');  
$router->map('POST','/admin/contacts/add','Controllers\Admin\ContactManagmentController::addContact','Contact add');   
$router->map('POST','/admin/contacts/delete','Controllers\Admin\ContactManagmentController::deleteContact','Contact delete');  
$router->map('POST','/admin/contacts/update','Controllers\Admin\ContactManagmentController::updateContact','Contact update'); 
//Schedule managment
$router->map('GET','/admin/schedules/managment','Controllers\Admin\ScheduleManagmentController::render','Cots panel');  
$router->map('POST','/admin/schedules/add','Controllers\Admin\ScheduleManagmentController::addSchedule','Cosf add');   
$router->map('POST','/admin/schedules/delete','Controllers\Admin\ScheduleManagmentController::deleteSchedule','Conteet delete');  
$router->map('POST','/admin/schedules/update','Controllers\Admin\ScheduleManagmentController::updateSchedule','esc update'); 
//carrousel managment
$router->map('GET','/admin/carrousels/managment','Controllers\Admin\CarrouselManagmentController::render','Carrousel panel');  
$router->map('POST','/admin/carrousels/add','Controllers\Admin\CarrouselManagmentController::addToCarrousel','Carrousel add');   
$router->map('POST','/admin/carrousels/delete','Controllers\Admin\CarrouselManagmentController::deleteFromCarrousel','Carrousel delete');
//presentation managment
$router->map('GET','/admin/presentation/managment','Controllers\Admin\PresentationManagmentController::render','Presentation panel');  
$router->map('POST','/admin/presentation/add','Controllers\Admin\PresentationManagmentController::addPresentation','Presentation add');   
$router->map('POST','/admin/presentation/delete','Controllers\Admin\PresentationManagmentController::deletePresentation','Presentation delete');  
$router->map('POST','/admin/presentation/update','Controllers\Admin\PresentationManagmentController::updatePresentation','Presentation update'); 
//Food menu managment 
$router->map('GET','/admin/foodmenu/managment','Controllers\Admin\FoodMenuManagmentController::render','FoodMenu panel');  
$router->map('POST','/admin/foodmenu/add','Controllers\Admin\FoodMenuManagmentController::addFoodMenu','FoodMenu add');   
$router->map('POST','/admin/foodmenu/delete','Controllers\Admin\FoodMenuManagmentController::deleteFoodMenu','FoodMenu delete');  
$router->map('POST','/admin/foodmenu/update','Controllers\Admin\FoodMenuManagmentController::updateFoodMenu','FoodMenu update'); 
//class managment 
$router->map('GET','/admin/classes/managment','Controllers\Admin\ClassManagmentController::render','Class panel');  
$router->map('POST','/admin/classes/add','Controllers\Admin\ClassManagmentController::addClass','Class add');   
$router->map('POST','/admin/classes/delete','Controllers\Admin\ClassManagmentController::deleteClass','Class delete');  
$router->map('POST','/admin/classes/update','Controllers\Admin\ClassManagmentController::updateClass','Class update');  
$router->map('GET','/admin/classes/get','Controllers\Admin\ClassManagmentController::getClassesJson','Class get'); 
//other routes