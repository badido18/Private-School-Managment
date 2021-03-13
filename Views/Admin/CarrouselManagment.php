<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Diapos</title>
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
    <h1>Tout les Diapos</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>Lien de l'image</h3></div>
            </div>  
        <?php 
                foreach ($this->loadDiapo() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>$pres->imgUrl</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter une Image</h1> 
        <div class="formctn">
            <form class="dashform" action="/admin/carrousels/add" method="post">
                <input type="text" required name="imgUrl" placeholder="Url de l'image">
                <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer une Image</h1>
        <div class="formctn">        
            <form class="dashform" action="/admin/carrousels/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>

    </div>
</div>

</body>
</html>