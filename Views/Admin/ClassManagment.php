<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Classes</title>
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
                <div class="txt"><h3>niveau</h3></div>
                <div class="txt"><h3>classe</h3></div>
            </div>  
            <?php 

                foreach ($this->getClasses() as $pres) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$pres->id</p></div>
                                <div class=\"txt\"><p>$pres->level</p></div> 
                                <div class=\"txt\"><p>".$pres->getName()."</p></div> 
                            </div>";
                }
            ?>
            </div>
        </div>
    </div>


    <div class="adminComponent">
    <h1>Ajouter uen Classe</h1> 
        <div class="formctn">  
            <form class="dashform" action="/admin/classes/add" method="post">
            <input type="text" required name="level" placeholder="Niveau">
            <input type="number" required name="year" placeholder="Annee">
            <input type="text"  name="major" placeholder="Filiare">
            <input type="number" required name="number" placeholder="Numero de classe">
            <input type="text"  name="scheduleUrl" placeholder="Lien vers emplois du temps">
            <button>Ajouter</button>
            </form>
        </div>
    </div>
    
    <div class="adminComponent">
        <h1>Supprimer une classe</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/classes/delete" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <button class="bk-red">Supprimmer</button>
            </form>
        </div>
    </div>


    <div class="adminComponent">
        <h1>Mettre a jour une classe</h1>
        <div class="formctn">           
            <form class="dashform" action="/admin/classes/update" method="post">
            <input type="number" required name="id" placeholder="identifiant">
            <input type="text" required name="arg" placeholder="argument">
            <input type="text" required name="value" placeholder="valeur">
            <button>Mettre a jour</button>
            </form>
        </div>
    </div>

<script>
    const getData = async (route) =>
        await fetch(route, 
        {
            method: 'GET'
        })
        .then( res => res.json())

    getData('/admin/classes/get')
    .then( data => console.log(data) );
</script>

    </div>
</div>
</body>
</html>