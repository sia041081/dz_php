
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id = " . $id;
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_assoc($res);
?>
<div class="content_bd" ">
<img src="<?=$pages['img']?>" width="70%" alt="">
<br/>
<br/>
<p><?=$pages['content']?></p>
<div><h3><a href="/admin/?action=add_page&id=<?= $_GET['id'] ?>">Редактировать страницу</a></h3></div>
</div>