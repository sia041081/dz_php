<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id = " . $id;
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_assoc($res);
?>
<div class="content_bd" ">
    <img src="<?=$pages['img']?>" alt="">
    <br/>
    <br/>
    <p><?=$pages['content']?></p>
</div>



