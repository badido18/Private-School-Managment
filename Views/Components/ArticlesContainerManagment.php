<div class="articleContainer">
    <?php
    echo "
    <script>
        const submitForm = () => {
            return confirm('Vous etes sur  ?');
        }
    </script>";
    foreach ($this->loadArticles() as $article) {
        $imgUrl = ($article->imgUrl == '' or $article->imgUrl === NULL )? "/src/img/classroom1.jpg" : $article->imgUrl ;
        echo "<div class=\"article\" id=\"$article->id\" >
                <img src=$imgUrl alt=\"\">
                <span class=\"co-blue bld\" >id : $article->id</span>
                <h3>$article->title</h3>
                <p>$article->content</p>

                <form onsubmit=\"return submitForm(this);\" method=\"POST\" action=\"/admin/articles/delete\">
                    <input type=\"number\" name=\"id\" value=\"$article->id\" hidden >
                    <button class=\"bk-red\">supprimmer</button>
                </form>
            </div>" ;
    }
    ?>
</div>