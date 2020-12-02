<?php
$sql = "SELECT * FROM pages ORDER BY id DESC ;";
$result = mysqli_query($connection, $sql);
//var_dump($result);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($articles);


?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($articles as $article): ?>
                <div class="post-preview">
                    <a href="/?page_type=article&id=<?= $article['id'] ?>">
                        <h2 class="post-title">
                            <?= $article['title'] ?>
                        </h2>

                    </a>
                    <img src="<?= $article['img'] ?>" width="50%" alt="">
                    <h3 class="post-subtitle">
                        <?= substr($article['content'], 0, 100) ?>...
                    </h3>
                    <p class="post-meta">Автор
                        <a href="#"><?= $article['author'] ?></a>
                        в <?= $article['category'] ?>
                    </p>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- Pager -->
           
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>
