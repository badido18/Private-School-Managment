<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Contacts</title>
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
<form action="/admin/contacts/add" method="post">
    <select required name="type">
        <option value="Telephone">Telephone</option>
        <option value="Email">Email</option>
        <option value="Address">Address</option>
        <option value="Telephone fixe">Telephone fixe</option>
    </select>
    <input type="text" required name="content" placeholder="Contenu">
    <button>Ajouter</button>
</form>
<!--
<form action="/admin/contacts/delete" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <button>Supprimmer</button>
</form>

<form action="/admin/contacts/update" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <input type="text" required name="arg" placeholder="argument">
    <input type="text" required name="value" placeholder="valeur">
    <button>Mettre a jour</button>
</form>-->
    </div>
</div>
</body>
</html>