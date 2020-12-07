<?php
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$sql = "SELECT * FROM goods";
$result = mysqli_query($connection_shop, $sql);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
require_once __DIR__ . '/headers/' . $name . '_header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php foreach ($articles as $article): ?>
                    <div class="post-preview">
                        <a href="/?page_type=product&id=<?= $article['id'] ?>">
                            <h2 class="post-title">
                                <?= $article['name_product'] ?>
                            </h2>

                        </a>
                        <img src="<?= $article['img_product'] ?>" width="50%" alt="">
                        <h3 class="post-subtitle">
                            <?= substr($article['descript_product'], 0, 100) ?>...
                        </h3>
                        <p>Цена: <?= $article['price'] ?> $</p>
<!--                        <p class="post-meta">Posted by-->
<!--                            <a href="#">--><?//= $article['author'] ?><!--</a>-->
<!--                            in --><?//= $article['category_name'] ?>
<!--                        </p>-->
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
<?php
