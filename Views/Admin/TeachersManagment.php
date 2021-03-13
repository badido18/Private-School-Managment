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
    <h1>Les Enseignants</h1>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>id</h3></div>
                <div class="txt"><h3>Nom / Prenom</h3></div>
                <div class="txt"><h3>heures de travails / Heure de reception </h3></div>
            </div>  
        <?php 
                foreach ($this->loadTeachers() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>$pres->firstName / $pres->lastName</p></div> 
                                <div class=\"txt\"><p>$pres->workHours H/ $pres->receptionTime</p></div> 
                            </div>";
                }
        ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter un Enseignants</h1> 
        <div class="formctn">  
            <form class="dashform" action="/admin/teachers/add" method="post">
                <input type="text" required name="firstName" placeholder="Prenom">
                <input type="text" required name="lastName" placeholder="Nom">
                <input type="text" required name="birthDate" placeholder="date de Naissance">
                <input type="text" required name="level" value="3" placeholder="Niveau" hidden>
                <input type="text" required name="workHours" placeholder="Heure de Travail">
                <input type="text" required name="receptionTime" placeholder="Heures de Reception">
                <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer un enseignants</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/teachers/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>


    <div class="adminComponent">
        <h1>Mettre a jour un enseignats</h1>
        <div class="formctn">      
            <form class="dashform" action="/admin/teachers/update" method="post">
                <input type="number" required name="id" placeholder="identifiant"><select id="arg" name="arg" required >
                    <option value="lastname">Nom</option>
                    <option value="firstname">Prenom</option>
                    <option value="workhours">Heures de Travails</option>
                    <option value="receptiontime">Heures de Reception</option>
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