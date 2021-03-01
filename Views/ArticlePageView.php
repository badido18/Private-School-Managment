<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->article->__get('title') ; ?> - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<div class="articleImgCtn">
			<?php 
				$imgUrl = $this->article->__get('imgUrl') ;
				if(isset($imgUrl))
					echo "<img src=\"".$imgUrl."\" alt=\"\" srcset=\"\">" ;
			?>
		</div>

		<div class="articleTextCtn">
		<h1><?php echo $this->article->__get('title') ; ?></h1>
		<p><?php echo $this->article->__get('content') ; ?></p>
		</div>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>