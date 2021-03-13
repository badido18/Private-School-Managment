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


    <div class="adminComponent">
    <h1>Tout les Contacts</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>type</h3></div> 
                <div class="txt"><h3>contenu</h3></div> 
            </div>  
        <?php 
                foreach ($this->loadContacts() as $contact) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$contact->id</p></div> 
                                <div class=\"txt\"><p>$contact->type</p></div> 
                                <div class=\"txt\"><p>$contact->content</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>

    <div class="adminComponent">
    <h1>Ajouter un Contact</h1> 
        <div class="formctn">

        <form  class="dashform" action="/admin/contacts/add" method="post">
            <select required name="type">
                <option value="Telephone">Telephone</option>
                <option value="Email">Email</option>
                <option value="Address">Address</option>
                <option value="Telephone fixe">Telephone fixe</option>
            </select>
            <textarea type="text" required name="content" placeholder="Contenu"></textarea>
            <button>Ajouter</button>
        </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un Contact</h1>
        <div class="formctn">

        <form  class="dashform" action="/admin/contacts/delete" method="post">
        <input type="number" required name="id" placeholder="identifiant">
        <button class="bk-red">Supprimer</button>
        </form>
        </div>
    </div>

    <div class="adminComponent">
        <h1>Mettre a jour un Contact</h1>
        <div class="formctn">

        <form  class="dashform" action="/admin/contacts/update" method="post">
        <input type="number" required name="id" placeholder="identifiant">
        <input type="text" required name="arg" value="content" placeholder="argument" hidden >
        <input type="text" required name="value" placeholder="valeur">
        <button>Mettre a jour</button>
        </form>
        </div>
    </div>


    </div>
</div>
</body>
</html>