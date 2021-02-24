<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Articles</title>
</head>
<body>
<form action="/logout" method="post">
    <input type="submit" value="se deconnecter">
</form>
<form action="/admin" method="get">
    <button>Retour</button>
</form>

<form action="/admin/articles/add" method="post">

    <input type="text" required name="title" placeholder="Titre">
    <textarea type="text" required name="content" placeholder="Contenu"></textarea>
    <input type="text"  name="imgUrl" placeholder="Lien vers l'image">
    <p>Tout le monde</p><input type="checkbox" name="everyone">
    <p>Enseignants</p> <input type="checkbox" name="teachers">
    <p>Parents</p> <input type="checkbox" name="parents">
    <p>Eleves</p><input type="checkbox" name="students">
    <p>Primaire</p><input type="checkbox" name="level1">
    <p>Moyen</p><input type="checkbox" name="level2">
    <p>Lycee</p><input type="checkbox" name="level3">
    <button>Ajouter</button>
</form>


</body>
</html>