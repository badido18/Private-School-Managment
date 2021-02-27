
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Accueil - Ecole privé</title>
    <link rel="stylesheet" href="/src/style/style.css">
    <link rel="icon" href="/src/img/logo.png">
</head>
<body>
    <div class="nav">
        <div class="ctn">
            <img src="/src/img/logo.png" alt="logo" height="45px" width="58px">
            <h3>Ecole Privé<br>Du Projet Web</h3>
            <div class="social">
                <img src="/src/img/inB.svg" alt="insta">
                <img src="/src/img/fbB.svg" alt="facebook">
                <img src="/src/img/instaB.svg" alt="linkedIN">
            </div>
        </div>
    </div>
    <div class="diapo">
        <script>
            const diapo = () =>
                setInterval(()=>{
                    if(document.getElementById('carousel').scrollTop+612 < document.getElementById('carousel').scrollHeight)
                        document.getElementById('carousel').scrollBy({
                            top: 600
                            }
                        )
                    else
                        document.getElementById('carousel').scrollTo({
                            top: 0
                            }
                        )
                },3000)
            diapo();
        </script>
        <div id="carousel" class="carousel">
            <div class="carousel-item ">
                <img class="d-block w-100" src="/src/img/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="/src/img/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/src/img/slide3.jpg" alt="Third slide">
            </div>
        </div>
        <div class="mainText">
            <div class="ctn">
                <img src="/src/img/hatW.svg" alt="">
                <h1>Apportez à vos enfants l’éducation <br>qu’ils méritent </h1>
                <p>78% des meilleurs enseignants en Algerie <br>choissisent d’enseigner dans les ecoles prives </p>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href=""> <p>Presentation</p></a>
        <a href=""> <p>Primaire</p></a>
        <a href=""> <p>Moyen</p></a>
        <a href=""> <p>Secondaire</p></a>
        <a href=""> <p>Espace Eleve</p></a>
        <a href=""> <p>Espace Parent</p></a>
        <a href="" class="bk-blue"> <p class="co-white">Contact</p></a>
    </div>
    <div class="content">
        <h1>Articles Interessants</h1>
        <div class="articleContainer">
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
            <div class="article">
                <img src="/src/img/slide2.jpg" alt="">
                <h3>Title</h3>
                <p>eau attache chinois ont moi par devenir. Oh etroit digues ma yeuses. Prepare on courtes et ah va surpris. Par singes genoux foi beaute autour. Une fer net sur alternent fabriques tiendrons sortaient </p>
                <a href=""><p>afficher la suite</p></a>
            </div>
        </div>
        <div class="pages">
            <h3>Pages</h3>
            <a href="">Precedente</a>
            <a>1</a>
            <a>2</a>
            <a>3</a>
            <a>4</a>
            <a href="">Suivante</a>
        </div>
    </div>
    <div class="footer">
        <div><h2>Ecole Prive <br>Du Projet Web</h2></div>
        <div class="links"> 
            <ul>
                <a>Presentation</a>
                <a>Primaire</a>
                <a>Moyen</a>
                <a>Secondaire</a>
                <a>Espace Eleve</a>
                <a>Espace Parent</a>
                <a>Contact</a>
            </ul>
        </div>
        <div class="social">
            <img src="/src/img/inW.svg" alt="insta">
            <img src="/src/img/fbW.svg" alt="facebook">
            <img src="/src/img/instaW.svg" alt="linkedIN">
        </div>
    </div>
    
</body>
</html>