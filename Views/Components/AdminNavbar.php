<div class="spacenav">
    <div class="logo">
        <img src="/src/img/logo.png" alt="logo" height="45px" width="58px">
        <a href="/"><h3>Ecole Privé<br>Du Projet Web</h3></a>
    </div>
    <div class="bar"> <h3 class="co-blue">Espace <?php use Classes\Article ;  echo Article::categoryToFrench($this->space) ?></h3></div>
    <form action="/logout" method="post">
        <button class="bk-red w-auto" type="submit">Se deconnecter</button>
    </form>
</div>