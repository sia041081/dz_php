
<?php
$id = $_GET['id'];
$stmt = mysqli_prepare($connection, "SELECT * FROM pages WHERE id = ?");
mysqli_stmt_bind_param($stmt, "d", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$pages =mysqli_fetch_assoc($res);

?>
<div class="content_bd" ">
<img src="<?=$pages['img']?>" width="70%" alt="">
<br/>
<br/>
<p><?=$pages['content']?></p>
<div>
    <h3><a href="/admin/?action=add_page&id=<?= $_GET['id'] ?>">Редактировать страницу</a></h3>
</div>
</div>