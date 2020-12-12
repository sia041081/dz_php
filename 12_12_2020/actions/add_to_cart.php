<?php
if (isset($_POST['id'])){
    $_SESSION['cart'][]=$_POST['id'];
}