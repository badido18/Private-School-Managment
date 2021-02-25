<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
<form action="/logout" method="post">
    <input type="submit" value="se deconnecter">
</form>
<form action="/admin/articles/managment" method="get">
    <button>Gestion des Articles</button>
</form>
<form action="/admin/users/managment" method="get">
    <button>Gestion des Utilisateurs</button>
</form>
<form action="/admin/teachers/managment" method="get">
    <button>Gestion des Enseignants</button>
</form>
<form action="/admin/students/managment" method="get">
    <button>Gestion des Eleves</button>
</form>
<form action="/admin/parents/managment" method="get">
    <button>Gestion des Parents</button>
</form>
<form action="/admin/contacts/managment" method="get">
    <button>Gestion des Contacts</button>
</form>
<form action="/admin/carrousels/managment" method="get">
    <button>Gestion des Diapos</button>
</form>
<form action="/admin/foodmenu/managment" method="get">
    <button>Gestion des Plat de Restauration</button>
</form>
<form action="/admin/presentation/managment" method="get">
    <button>Gestion de la presentation</button>
</form>
<form action="/admin/classes/managment" method="get">
    <button>Gestion des classes</button>
</form>
<form action="/admin/schedules/managment" method="get">
    <button>Gestion des emplois du temps</button>
</form>
</body>
</html>