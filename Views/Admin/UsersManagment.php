<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Enseignants</title>
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
    <h1>Les Utilisateurs</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>Username / email</h3></div>
                <div class="txt"><h3>Addresse / Telephone</h3></div>
            </div>  
        <?php 
                foreach ($this->loadUsers() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>$pres->username /". $pres->__get('email')."</p></div> 
                                <div class=\"txt\"><p>$pres->address /". $pres->phones[0]." </p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter un Utilisateur</h1> 
        <div class="formctn">  
            <form class="dashform" action="/admin/users/add" method="post">        
            <input type="text" required name="username" placeholder="Nom d'utilisateur">
            <input type="text" required name="email" placeholder="E-mail">
            <input type="text" required name="passwd" placeholder="Mot de passe">
            <select name="type">
                <option value="0">Admin</option>
                <option value="1">Enseignant</option>
                <option value="2">Parent</option>
                <option value="3">Eleve</option>
            </select>
            <input type="text" name="address" placeholder="Adresse">
            <input type="text" name="phone1" placeholder="Telephone 1">
            <input type="text" name="phone2" placeholder="Telephone 2">
            <input type="text" name="phone3" placeholder="Telephone 3">
            <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un utilisateur</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/users/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>


    <div class="adminComponent">
        <h1>Mettre a jour un utilisateur</h1>
        <div class="formctn">      
            <form class="dashform" action="/admin/users/update" method="post">
                <input type="number" required name="id" placeholder="identifiant"><select id="arg" name="arg" required >
                    <option value="username">Nom utilisateur</option>
                    <option value="passwd">Mot de passe</option>
                    <option value="email">Email</option>
                    <option value="address">Addersse</option>
                </select>
                <input type="text" required name="value" placeholder="Valeur">
                <button>Mettre a jour</button>
            </form>
        </div>
    </div>

     </div>
</div>

</body>
</html>