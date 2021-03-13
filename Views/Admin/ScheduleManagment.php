<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Emplois du temps</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">   
</head>
<body>
<?php
    require_once __DIR__."/../Components/AdminNavbar.php" ;
?>
<div class="Main" id="pff">

    <?php 
        require_once __DIR__."/../Components/leftDrawer.php";
     ?>
    <div class="Dash">




    <div class="adminComponent">
    <h1>Les Emplois</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>classe</h3></div>
                <div class="txt"><h3>Image Url</h3></div>
            </div>  
        <?php 
                foreach ($this->loadSchedules() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>".$pres->getName()."</p></div> 
                                <div class=\"txt\"><p>$pres->scheduleUrl</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter (modifier) un Emplois du temps</h1> 
        <div class="formctn">  
            <form class="dashform" action="/admin/schedules/add" method="post">
                <input type="text" required name="id" placeholder="id">
                <input type="text" required name="scheduleUrl" placeholder="Url de l'emploi du temp">
                <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un emplois du temps</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/schedules/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>


     </div>
</div>

</body>
</html>