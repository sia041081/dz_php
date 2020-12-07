<?php
mysqli_query($connection_shop, 'SET NAMES "utf8"');
$id = $_GET['id'];
$sql = "SELECT * FROM goods where id = " . $id;

$res = mysqli_query($connection_shop, $sql);
if (mysqli_num_rows($res) === 1):

    $article = mysqli_fetch_assoc($res);

    require_once __DIR__ . '/headers/' . $name . '_header.php';

    ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?= $article['descript_product'] ?>
                </div>
            </div>
        </div>
    </article>

    <hr>
<?php
endif;
