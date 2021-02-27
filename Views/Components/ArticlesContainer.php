<div class="articleContainer">
    <?php
    foreach ($this->loadArticles() as $article) {
        $imgUrl = ($article->imgUrl == '' or $article->imgUrl === NULL )? "/src/img/classroom1.jpg" : $article->imgUrl ;
        echo "<div class=\"article\">
                <img src=$imgUrl alt=\"\">
                <h3>$article->title</h3>
                <p>$article->content</p>
                <a href=\"/article/$article->id\"><p>afficher la suite</p></a>
            </div>" ;
    }
    ?>
</div>