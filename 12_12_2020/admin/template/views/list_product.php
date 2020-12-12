
<?php
$id = $_GET['id'];
$stmt = mysqli_prepare($connection_shop, "SELECT * FROM goods WHERE id = ?");
mysqli_query($connection_shop, 'SET NAMES "utf8"');
mysqli_stmt_bind_param($stmt, "d", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$pages =mysqli_fetch_assoc($res);

?>
<div class="content_bd" ">
<img src="<?=$pages['img_product']?>" width="70%" alt="">
<br/>
<br/>
<p><?=$pages['descript_product']?></p>
<div>
    <h3><a href="/admin/?action=add_product&id=<?= $_GET['id'] ?>">Редактировать страницу</a></h3>
</div>
</div>