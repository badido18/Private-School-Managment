<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacts - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<h1>Nous Contacter</h1>
        <div class="presentation">
        <div class="text">
            <?php
                $contacts = $this->loadContacts() ;
                foreach ($contacts as $elt) {
                    echo "<p class=\" paragraph co-blue bld\"> <span class=\"co-dark-gray lgt\">$elt->type :&nbsp;&nbsp;&nbsp;&nbsp;</span> $elt->content</p> <br>" ;
                }
            ?>
        </div>
        <div class="imgs2">
            <img src="/src/img/classroom2.jpg" alt="" srcset="">
        </div>
        </div>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>