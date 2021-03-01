<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Emplois du temps - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php

use Classes\Classe;

require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<h1>Les emplois du temps</h1>
        <br>
        <p class="co-gray">Veuillez selectionner une classe</p>
        <div class="presentation">
        <div class="text3">
            <p class="bld">Les classes</p> 
            <select name="classe" id="classe">
                <option default>Selectioner une classe</option>
                <?php
                    foreach ($this->loadClasses() as $Classe) {
                        echo "<option value=\"$Classe->levelNumber/$Classe->id\">".$Classe->getName()."</option>" ;
                    }
                ?>
            </select>
            <script>
                const displaySchedule = () => {
                    let menu = document.getElementById("classe").addEventListener("change",(e) =>{
                         window.location.href = "/emplois/"+document.getElementById("classe").value  
                    },false)
                }
                displaySchedule();
            </script>
            <?php 
                if(isset($this->classe))
                   echo "<p class=\"co-gray\">Emploi du temps de la classe : <span class=\"co-blue bld\" > ".$this->classe->getName()." </span> </p> ";
            ?>
        <br>
        </div>
        <div class="imgs3">
            <?php 
                $scheduleUrl = $this->loadSchedule();
                if(isset($scheduleUrl))
                    echo "<img src=\"$scheduleUrl\" alt=\"\" srcset=\"\">"
            ?>
        </div>
        </div>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>

