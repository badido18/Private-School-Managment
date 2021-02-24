<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
</head>
<body>
<form action="/logout" method="post">
    <input type="submit" value="se deconnecter">
</form>
<form action="/admin" method="get">
    <button>Retour</button>
</form>

<form action="/admin/users/add" method="post">

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
<!--
<form action="/admin/users/delete" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <button>Supprimmer</button>
</form>

<form action="/admin/users/update" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <input type="text" required name="arg" placeholder="argument">
    <input type="text" required name="value" placeholder="valeur">
    <button>Mettre a jour</button>
</form>-->
</body>
</html>