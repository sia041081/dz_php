<div id="page-wrapper">
    <div class="row">
        <?php
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $imgUrl = $_FILES['page_img']['name'];
        var_dump($_POST);
        if (!empty($_POST)) {
            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl = '/images/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    '../images/' . $_FILES['page_img']['name']);
            }
        }

        $sql = mysqli_prepare($connection, 'INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
VALUES (?, ?, ?, ?, ?)');
        mysqli_stmt_bind_param($sql, "sssds", $title, $content, $author, $category, $imgUrl);
        mysqli_stmt_execute($sql);
        ?>

    </div>
</div>
<meta http-equiv="refresh" content="2; url=http://homestead.test/admin/?action=list_page">