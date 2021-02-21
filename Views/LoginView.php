<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>
<form action="/auth" method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="passwd" placeholder="Mot de passe">
    <input type="submit" value="Se connecter">
    <?php if(str_contains($_SERVER['REQUEST_URI'],'error')) echo "<p> la combinaison de Nom d'utilisateur / Mot de passe est incorrect </p>" ?>
</form>
    
</body>
</html>