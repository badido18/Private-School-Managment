<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Plat de Restauration</title>
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
    <h1>Le Menu de restauration</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>Menu de jour</h3></div>
                <div class="txt"><h3>Jour</h3></div>
            </div>  
        <?php 
                foreach ($this->loadFoodMenu() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>$pres->meal</p></div> 
                                <div class=\"txt\"><p>$pres->dayName</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter un jour</h1> 
        <div class="formctn">  
            <form class="dashform" action="/admin/foodmenu/add" method="post">
                <input type="text" required name="dayName" placeholder="Jour de semaine">
                <input type="text" required name="meal" placeholder="repas">
                <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un jour</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/foodmenu/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>


    <div class="adminComponent">
        <h1>Mettre a jour un repas</h1>
        <div class="formctn">      
            <form class="dashform" action="/admin/foodmenu/update" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <input type="text" required name="arg" placeholder="argument" value="dayname" hidden> 
                <input type="text" required name="value" placeholder="Repas">
                <button>Mettre a jour</button>
            </form>
        </div>
    </div>

     </div>
</div>

</body>
</html>