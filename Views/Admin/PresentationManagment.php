<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion de la Presentation</title>
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
    <h1>Tout les Presentations</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>Paragraph</h3></div> 
                <div class="txt"><h3>Lien vers l'image</h3></div> 
            </div>  
        <?php 
                foreach ($this->loadPresentation() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div> 
                                <div class=\"txt\"><p>$pres->paragraph</p></div> 
                                <div class=\"txt\"><p>$pres->imgUrl</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>

    <div class="adminComponent">
    <h1>Ajouter un Paragraph</h1> 
        <div class="formctn">
        <form class="dashform" action="/admin/presentation/add" method="post">
            <input type="text" name="paragraph" placeholder="Paragraph">
            <input type="text" name="imgUrl" placeholder="Lien vers l'image">
            <button>Ajouter</button>
        </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un paragraph</h1>
        <div class="formctn">
            <form class="dashform" action="/admin/presentation/delete" method="post">
            <input type="number" required name="id" placeholder="identifiant">
            <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>

    <div class="adminComponent">
        <h1>Mettre a jour un paragraph</h1>
        <div class="formctn">
            <form class="dashform" action="/admin/presentation/update" method="post">
            <input type="number" required name="id" placeholder="identifiant">
            <select name="arg" id="arg">
                <option value="paragraph">Paragraph</option>
                <option value="imgUrl">Lien vers l'image</option>
            </select>
            <input type="text" required name="value" placeholder="valeur">
            <button>Mettre a jour</button>
            </form>
        </div>
    </div>



    </div>
</div>

</body>
</html>