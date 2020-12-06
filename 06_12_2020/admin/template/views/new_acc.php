
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="/admin_assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin_assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/admin_assets/css/custom.css" rel="stylesheet">
    <link href="/admin_assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;">

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <form action="#" method="post" >
            <div id="login" class="animate form">
                <section class="login_content">
                    <?php
                    require_once '../../../core/db.php';

                    if (isset($_POST['login'])) {
                        $login = $_POST['login'];
                        if ($login == '') {
                            unset($login);
                        }
                    }
                    if (isset($_POST['email'])) {
                        $mail = $_POST['email'];
                        if ($mail == '') {
                            unset($mail);
                        }
                    }
                    if (isset($_POST['password'])) {
                        $password = md5($_POST['password']);
                        if ($password == '') {
                            unset($password);
                        }
                    }
                    if (empty($login) or empty($password) or empty($mail)) {
                        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля! <br> <a href='/admin/template/login.php'><h3>Назад</h3></a>");
                    }
                    $result = mysqli_query($connection, "SELECT id FROM users WHERE user_name = '$login'");
                    $myrow = mysqli_fetch_array($result);
                    if (!empty($myrow['id'])) {
                        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<br> <a href='/admin/'><h3>Назад</h3></a>");

                    }
                    $result2 = mysqli_query($connection,"INSERT INTO users (user_name, email, password) VALUES('$login', '$mail','$password')");
                    if ($result2 == 'TRUE') {
                      header("Location: http://homestead.test/admin/");
                    } else {
                        echo "Ошибка! Вы не зарегистрированы.";
                    }

                    ?>

        </form>
        <!-- form -->
        </section>
        <!-- content -->
        <!-- content -->
    </div>
</div>
</div>

</body>

</html>
