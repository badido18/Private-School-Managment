<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Se Connecter- Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<h1>Portail de connexion</h1>
        <br>
        <p class="co-gray">Veuillez introduire votre nom d’utilisateur ( ou email ) et mot de passe <br> afin d'accéder à cette page</p>
        <div class="presentation">
        <div class="text">
            <form action="/auth" method="post">
                <input type="text" name="username" placeholder="Nom d'utilisateur ou E-mail" autocomplete="off">
                <input type="password" name="passwd" placeholder="Mot de passe" autocomplete="off">
                <?php if(str_contains($_SERVER['REQUEST_URI'],'error')) echo "<p class=\"co-red nowhitespace\"> la combinaison nom d'utilisateur et mot de passe est incorrect !</p>" ?>
                <button type="submit">se connecter</button>
            </form>
        <br>
        <p class="co-gray t-small">
            <br>En vous connectant vous allez accéder à l'espace spécifique à votre compte, si vous constatez une erreur veuillez nous contacter à  <span class="co-blue">admin@projetweb.com</span>
        </p>
        </div>
        <div class="imgs2">
            <img src="/src/img/student2.jpg" alt="" srcset="">
        </div>
        </div>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>

