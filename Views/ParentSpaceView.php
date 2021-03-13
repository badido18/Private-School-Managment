<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Espace Parent</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">   
</head>
<body>
    <?php 
        require_once __DIR__."/Components/AdminNavbar.php";
    ?>
    <div class="Main">
        <div class="leftDrawer">
            <br><br>
            <a <?php echo "href=\"/parent\"" ?>><div class="drawerOption"><p>Informations personelles</p></div></a>
            <a <?php echo "href=\"/parent/\"$this->id/schedule" ?>><div class="drawerOption"><p>Emploi du temps</p></div></a>
            <a <?php echo "href=\"/parent/\"$this->id/marks" ?>><div class="drawerOption"><p>Notes</p></div></a>
            <a <?php echo "href=\"/parent/\"$this->id/activities" ?>><div class="drawerOption"><p>Activites extra</p></div></a>
            <!--<a <?php echo "href=\"/parent/\"$this->id/observations" ?>><div class="drawerOption"><p>Remarques Enseignants</p></div></a>-->
        </div>
        <div class="Dash">
            <div class="infoCtn">
                <?php 
                    echo " id : ".$this->userCredentials->id ;
                    echo "<br>Nom d'utilisateur : ".$this->userCredentials->username ;
                    echo "<br>Email: ".$this->userCredentials->email ;
                    echo "<br>Address : ".$this->userCredentials->address;
                    echo "<br>Numero de tel : ".$this->userCredentials->phones[0] ;
                    echo "<br>Prenom : ".$this->infos->firstName ;
                    echo "<br>Nom : ".$this->infos->lastName ;
                    echo "<br>Date de Naissance : ".$this->infos->birthDate;echo "<h1>Emplois du temps</h1>" ;
                          foreach ($this->getChildrenSchedules() as $key =>$sck) {
                            echo "<div class=\"imgs3\">" ;    echo "$key : <img src=\"$sck\" alt=\"\" srcset=\"\">" ;
                            echo '</div>' ;
                          }
                            
                    
                    echo "<h1>Activites Extrascolaire</h1>" ;
                    foreach ($this->getChildrenActivities() as $key => $act) {
                        echo $key." : " ;
                        foreach ($act as $ke) {
                            echo "<br>";
                            echo $ke['title'] ;
                        }
                    }
                    echo "<h1>Les Notes</h1>" ;
                    foreach ($this->getChildrenMarks() as $key => $act) {
                        echo $key." : " ;
                        foreach ($act as $mark) {
                            echo $this->getCourse($mark->courseId)->name." : ".$mark->mark;
                        }
                    }
                    foreach ($this->getMarks() as $mark) {
                    }
                ?>
            </div>

        </div>
    </div>
    
</body>
</html>