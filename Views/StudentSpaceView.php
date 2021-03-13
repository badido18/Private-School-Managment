<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Espace etudiant</title>
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
            <a <?php echo "href=\"/student\"" ?>><div class="drawerOption"><p>Informations personelles</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/schedule" ?>><div class="drawerOption"><p>Emploi du temps</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/marks" ?>><div class="drawerOption"><p>Notes</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/activities" ?>><div class="drawerOption"><p>Activites extra</p></div></a>
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
                    echo "<br>Date de Naissance : ".$this->infos->birthDate;
                    echo "<br>Niveau: ". $this->classe->level;
                    echo "<br>Annee: ". $this->classe->year;
                    echo "<br>Classe: ". $this->classe->getName();
                    echo "<h1>Emplois du temps</h1>" ;
                    echo "<div class=\"imgs3\">" ;
                          $scheduleUrl = $this->getSchedule();
                            if(isset($scheduleUrl))
                                echo "<img src=\"$scheduleUrl\" alt=\"\" srcset=\"\">" ;
                    echo '</div>' ;
                    
                    echo "<h1>Activites Extrascolaire</h1>" ;
                    foreach ($this->getActivities() as $act) {
                        echo $act['title'] ;
                        echo "<br>";
                    }
                    echo "<h1>Les Notes</h1>" ;
                    foreach ($this->getMarks() as $mark) {
                        echo $this->getCourse($mark->courseId)->name." : ".$mark->mark;
                    }
                    ?>

            </div>

        </div>
    </div>
    
</body>
</html>