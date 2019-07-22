<?php


include_once 'assets/php/classes/messageClass.php';
include_once 'assets/php/classes/database.php';
include_once 'assets/php/classes/loginClass.php';
include_once 'assets/php/controller/loginController.php';

$foto = parse_ini_file('config.ini')['PROJECT_FOTO'];
$name = parse_ini_file('config.ini')['PROJECT_NAME'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $name ?> | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
<?php if(isset($error)) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Erro!</h4>
        <?=$error?>
    </div>
<?php } ?>

<style>
.img-circle{
    width: 128px;
    height: 128px;
}
</style>
    <div class="login-box">
        <div class="login-logo">
            <div class="widget-user-image">
                <img class="img-circle" src="<?=$foto?>" alt="User Avatar">
            </div>
            <a href=""><b><?= $name ?></b></a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Realize o login</p>

            <form action="login.php" method="post">
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">

                    </div>
                    <div class="col-xs-4">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Entrar</button>
                    </div>
                </div>
            </form>

            <a href="recoverpass.php">Esqueci minha senha</a><br>
        </div>
    </div>

    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>