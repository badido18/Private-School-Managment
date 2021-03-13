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
<form action="/admin/presentation/add" method="post">
    <input type="text" name="paragraph" placeholder="Paragraph">
    <input type="text" name="imgUrl" placeholder="Lien vers l'image">
    <button>Ajouter</button>
</form>
<!--
<form action="/admin/presentation/delete" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <button>Supprimmer</button>
</form>

<form action="/admin/presentation/update" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <input type="text" required name="arg" placeholder="argument">
    <input type="text" required name="value" placeholder="valeur">
    <button>Mettre a jour</button>
</form>-->
    </div>
</div>

</body>
</html>