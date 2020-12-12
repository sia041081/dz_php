<?php

mysqli_query($connection_shop, 'SET NAMES "utf8"');
if (!empty($_GET['id'])) {
    $sql = "SELECT * FROM goods LEFT JOIN category ON goods.category = category.id WHERE category.id = " . $_GET['id'];
    $query = mysqli_query($connection_shop, $sql);
    $articles = mysqli_fetch_all($query, MYSQLI_ASSOC);
//    var_dump($sql);
    var_dump($articles);
//    var_dump(mysqli_error($connection_shop));
} else {
    mysqli_query($connection_shop, 'SET NAMES "utf8"');
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($connection_shop, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$sql = "SELECT * FROM category";
$result = mysqli_query($connection_shop, $sql);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($categories);


require_once __DIR__ . '/headers/' . $name . '_header.php';
?>
<a class="flex-sm-fill text-sm-center nav-link" href="/?page_type=catalog"
   style="border: 1px solid #9fcdff; margin-top: 0;">Все товары</a>
<nav class="nav nav-pills flex-column flex-sm-row">
    <?php foreach ($categories as $category) : ?>
        <a class="flex-sm-fill text-sm-center nav-link" href="/?page_type=catalog&id=<?= $category['id'] ?>">
            <?= $category['name_category'] ?>
            <!--        --><?php //var_dump($category);?>
        </a>
    <?php endforeach; ?>
</nav>
<div class="card-group" style="padding: 5%">
    <?php foreach ($articles as $article) : ?>
        <!--    --><?php //var_dump($article);?>
        <div class="card" style="padding: 5px;">
            <img src="<?= $article['img_product'] ?>" width="90vw" height="90vh" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $article['name_product'] ?></h5>
                <p class="card-text"><?= $article['descript_product'] ?></p>
                <p class="card-text"><small class="text-muted"><?= $article['price'] ?></small></p>
            </div>
            <button type="button" class="btn btn-outline-dark" data-id="<?= $article['id'] ?>">В корзину</button>
        </div>
    <?php endforeach; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".btn-outline-dark").on('click', function (event) {
            let id = $(event.target).data('id');
            console.log(id);
            $.ajax({
                url: '/?action=add_to_cart',
                method: 'POST',
                data: {id: id}
            });
        })

    });
</script>
<!-- Pager -->
<!--                <div class="clearfix">-->
<!--                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>-->
<!--                </div>-->


