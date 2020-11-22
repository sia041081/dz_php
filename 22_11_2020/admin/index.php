<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_db</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <
    <link href="css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .form_added,
        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]:checked ~ .form_added {
            display: block;
        }

        /* Стилизация псевдокнопки */
        .btn {
            display: inline-block;
            margin-bottom: 4px;
            padding: 4px 8px;
            background-color: #ffffff;
            border: 1px solid #000;
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>

        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Добавить статью</a></li>
        <!--<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
        <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
        <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
        <li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">-->
        </li>
        <!--<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>-->
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Добавить статью</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Добавление статьи</h1>
        </div>
        <div style="padding:50px">
            <label for="pseudoBtn" class="btn">Добавить статью</label>
            <input type="checkbox" id="pseudoBtn">
            <div class="form_added">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="title"/>
                    <br>
                    <input type="text" name="img" placeholder="img"/>
                    <br>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="content"></textarea>
                    <br>
                    <input type="text" name="author" placeholder="author"/>
                    <br>
                    <input type="text" name="category" placeholder="category"/>
                    <br>
                    <input type="file" name="img_down"><br>
                    <input type="submit" name="submit" value="Загрузить">
<!--                    <button type="submit">Save</button>-->
                </form>
                <?php require_once '../db.php' ?>
                <?php
                if (isset($_POST['submit'])) {
                    move_uploaded_file($_FILES['img_down']['tmp_name'], "uploads/" . $_FILES['img_down']['name']);
                }
                if (!empty($_POST)) {
                    $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`, `img_name`)
                  VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}','{$_POST['category']}', '{$_FILES['img_down']['name']}')";
                    mysqli_query($connection, $sql);
                }
                ?>

            </div>
        </div>
    </div><!--/.row-->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
    </script>

</body>
</html>