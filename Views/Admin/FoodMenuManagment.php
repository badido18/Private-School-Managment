<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Plat de Restauration</title>
</head>
<body>
<form action="/logout" method="post">
    <input type="submit" value="se deconnecter">
</form>
<form action="/admin" method="get">
    <button>Retour</button>
</form>

<form action="/admin/foodmenu/add" method="post">
    <input type="text" required name="dayName" placeholder="Jour de semaine">
    <input type="text" required name="meal" placeholder="repas">
    <button>Ajouter</button>
</form>
<!--
<form action="/admin/foodmenu/delete" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <button>Supprimmer</button>
</form>

<form action="/admin/foodmenu/update" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <input type="text" required name="arg" placeholder="argument">
    <input type="text" required name="value" placeholder="valeur">
    <button>Mettre a jour</button>
</form>-->
</body>
</html>