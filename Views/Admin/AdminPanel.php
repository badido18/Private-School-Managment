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
<form action="/admin/contacts/managment" method="get">
    <button>Gestion des Contacts</button>
</form>
</body>
</html>