<!DOCTYPE html>
<html>
<head>
    <?php
        $title = "Новости обо всём";
        require_once "blocks/head.php"; 
        $news = getNews (3);
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
           
           <?php
                for ($i = 0; $i < count($news); $i++) {
                    if($i == 0)
                        echo "<div id=\"bigArticle\">";
                    else
                        echo "<div class=\"article\">";
                    echo '<img src="/img/article_'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["intro_text"].'</p>
                <a href="/article.php">
                    <div class="more">Далее</div> 
                </a>  
            </div>';
            if($i == 0)
                echo "<div class=\"clear\"><br></div>";
                
                }
           
            ?>
           
           
           <!--  
            <div id="bigArticle">
                <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus odio, iure laboriosam et excepturi adipisci alias inventore quam repellat delectus iusto explicabo perspiciatis dicta ea voluptatum odit ipsum est esse tenetur tempora! Quibusdam fuga aliquam hic sit minima odit asperiores perspiciatis officia aperiam, dolorem, sequi corrupti inventore iusto nisi itaque.</p>
                <a href="/article.php">
                    <div class="more">Далее</div> 
                </a>  
            </div>
            <div class="clear"><br></div>
            <div class="article">
                <img src="/img/article_2.jpg" alt="Статья 2" title="Статья 2">
                <h2>Статья 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus odio, iure laboriosam et excepturi adipisci alias inventore quam repellat delectus iusto explicabo perspiciatis dicta ea voluptatum odit ipsum est esse tenetur tempora! Quibusdam fuga aliquam hic sit minima odit asperiores perspiciatis officia aperiam, dolorem, sequi corrupti inventore iusto nisi itaque.</p>
                <a href="/article.php">
                    <div class="more">Далее</div> 
                </a>
            </div>
            <div class="article">
                <img src="/img/article_3.jpg" alt="Статья 3" title="Статья 3">
                <h2>Статья 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus odio, iure laboriosam et excepturi adipisci alias inventore quam repellat delectus iusto explicabo perspiciatis dicta ea voluptatum odit ipsum est esse tenetur tempora! Quibusdam fuga aliquam hic sit minima odit asperiores perspiciatis officia aperiam, dolorem, sequi corrupti inventore iusto nisi itaque.</p>
                <a href="/article.php">
                    <div class="more">Далее</div> 
                </a>
            </div>
            -->
            
        </div>
        
        <?php require_once "blocks/rightCol.php" ?>
        
    </div>
    
    <?php require_once "blocks/footer.php" ?>
</body>
</html>