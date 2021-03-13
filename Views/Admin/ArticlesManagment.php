<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Articles</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">   
</head>
<body>
<?php
    require_once __DIR__."/../Components/AdminNavbar.php" ;
?>
<div class="Main">

    <?php 
        require_once __DIR__."/../Components/leftDrawer.php";
    ?>
    <div class="Dash">

    <div class="adminComponent">

        <h1>Ajouter un article</h1>

        <div class="formctn">
            <form class="dashform" action="/admin/articles/add" method="post">
                <input type="text" required name="title" placeholder="Titre">
                <textarea type="text" required name="content" placeholder="Contenu"></textarea>
                <input type="text"  name="imgUrl" placeholder="Lien vers l'image">
                <div class="selectionctn">
                    <div class="selection"><p>Tout le monde</p><input type="checkbox" name="everyone"></div>
                    <div class="selection"><p>Enseignants</p> <input type="checkbox" name="teachers"></div>
                    <div class="selection"><p>Parents</p> <input type="checkbox" name="parents"></div>
                    <div class="selection"><p>Eleves</p><input type="checkbox" name="students"></div>
                    <div class="selection"><p>Primaire</p><input type="checkbox" name="level1"></div>
                    <div class="selection"><p>Moyen</p><input type="checkbox" name="level2"></div>
                    <div class="selection"><p>Lycee</p><input type="checkbox" name="level3"></div>
                </div>
                <button>Ajouter</button>
            </form> 
        </div>

    </div>

    <div class="adminComponent">
        <h1 >Modifier un article</h1>
        <div class="formctn">
            <form class="dashform"  id="updateForm" action="/admin/articles/update" method="post">
                <input type="number" required name="id" placeholder="identifiant">
                <select id="arg" name="arg" required >
                    <option value="title">Titre</option>
                    <option value="content">Contenu</option>
                    <option value="add category">Ajouter category</option>
                    <option value="del category">Supprimer category</option>
                </select>
                <input  id="input" type="text" required name="value" id="value" placeholder="valeur">
                <button>Mettre a jour</button>
            </form>
        </div>
    </div>

    <div class="adminComponent">
        <h1>Tout les Articles</h1>

        <?php 
            require_once __DIR__."/../Components/ArticlesContainerManagment.php";
            require_once __DIR__."/../Components/ArticlesPageViewer.php";
        ?>
    </div>

    </div>
</div>


            
<div id="trash" hidden>
    <select id="CategSelector" required name="value">
        <option value="everyone">Tous</option>
        <option value="teachers">Enseignants</option>
        <option value="students">Eleves</option>
        <option value="parents">Parents</option>
        <option value="level1">Primaire</option>
        <option value="level2">Moyen</option>
        <option value="level3">Secondaire</option>
    </select>
</div>

<script>
        var tmp = 0 ;
        const selectAdapt = () => {
                var arg = document.getElementById("arg");
                var form = document.getElementById("updateForm");
                var trash = document.getElementById("trash");
                arg.addEventListener("change",(e) =>{

                    if ((arg.value.includes("category") && tmp == 0 )||(arg.value.includes("category") && tmp ==0 ))
                        form.insertBefore(trash.children[0],form.children[2]) ;
                        trash.appendChild(form.children[3]);
                },false)
            }
        selectAdapt();
</script>

</body>
</html>