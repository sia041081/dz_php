<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin_assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin_assets/css/datepicker3.css" rel="stylesheet">
    <link href="/admin_assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin_assets/css/styles_admin.css">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= BASE_PATH . "/../admin_assets/js/html5shiv.js" ?>"></script>
    <script src="<?= BASE_PATH . "/../admin_assets/js/respond.min.js" ?>"></script>
    <![endif]-->
</head>
<body style='overflow-x:hidden;'>
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
            <div class="profile-usertitle-name"><?=$_SESSION['user']['role']?> <?=$_SESSION['user']['name']?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu">
        <li><a href="<?= '/admin/?action=list_page' ?>"><em class="fa fa-calendar">&nbsp;</em> Смотреть разделы</a></li>
        <li><a href="<?= '/admin/?action=add_page' ?>"><em class="fa fa-bar-chart">&nbsp;</em> Добавить раздел</a></li>
        <li><a href="/admin/template/login.php"><em class="fa fa-power-off">&nbsp;</em> Выход</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">

    </div><!--/.row-->
    <div style="margin: 20px;">
        <?php require_once $fullPath ?>
    </div>
</div>    <!--/.main-->
<div class="row">

</div>
<script src="/admin_assets/js/jquery-1.11.1.min.js"></script>
<script src="/admin_assets/js/bootstrap.min.js"></script>
<script src="/admin_assets/js/chart.min.js"></script>
<script src="/admin_assets/js/chart-data.js"></script>
<script src="/admin_assets/js/easypiechart.js"></script>
<script src="/admin_assets/js/easypiechart-data.js"></script>
<script src="/admin_assets/js/bootstrap-datepicker.js"></script>
<script src="/admin_assets/js/custom.js"></script>
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