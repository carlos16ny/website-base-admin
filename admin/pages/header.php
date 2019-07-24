<?php
require_once '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$map['titulo']?></title>
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="../components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="">
                        <a href="components.php">
                            <i class="fa fa-circle-o"></i>
                            Componentes
                        </a>
                    </li>
                    <li class="">
                        <a href="modals.php">
                            <i class="fa fa-circle-o"></i>
                            Modais
                        </a>
                    </li>
                    <li class="">
                        <a href="tables.php">
                            <i class="fa fa-circle-o"></i>
                            Tabelas
                        </a>
                    </li>
                    <li class="">
                        <a href="chartjs.php">
                            <i class="fa fa-circle-o"></i>
                            Chart JS
                        </a>
                    </li>
                    <li class="">
                        <a href="calendar.php">
                            <i class="fa fa-circle-o"></i>
                            Calendar
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span>Formulários</span>
                            <span class="pull-right-container">
                            <span class="label label-primary pull-right">6</span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="forms.php#select2"><i class="fa fa-circle-o"></i> Select2</a></li>
                            <li><a href="forms.php#timepicker"><i class="fa fa-circle-o"></i> TimePicker</a></li>
                            <li><a href="forms.php#datepicker"><i class="fa fa-circle-o"></i> DatePicker</a></li>
                            <li><a href="forms.php#daterangepicker"><i class="fa fa-circle-o"></i> DateRangerPicker</a></li>
                            <li><a href="forms.php#colorpicker"><i class="fa fa-circle-o"></i> ColorPicker</a></li>
                            <li><a href="forms.php#icheck"><i class="fa fa-circle-o"></i> iCheck</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span>Elementos</span>
                            <span class="pull-right-container">
                            <span class="label label-primary pull-right">7</span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="forms.php#select2"><i class="fa fa-circle-o"></i> Select2</a></li>
                            <li><a href="forms.php#timepicker"><i class="fa fa-circle-o"></i> TimePicker</a></li>
                            <li><a href="forms.php#datepicker"><i class="fa fa-circle-o"></i> DatePicker</a></li>
                            <li><a href="forms.php#daterangepicker"><i class="fa fa-circle-o"></i> DateRangerPicker</a></li>
                            <li><a href="forms.php#colorpicker"><i class="fa fa-circle-o"></i> ColorPicker</a></li>
                            <li><a href="forms.php#icheck"><i class="fa fa-circle-o"></i> iCheck</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="ckeditor.php">
                            <i class="fa fa-circle-o"></i>
                            CK Editor
                        </a>
                    </li>
                    <li class="">
                        <a href="chartjs.php">
                            <i class="fa fa-circle-o"></i>
                            CK Finder
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <?=$map['secao']?> 
                    <small><?=$map['titulo']?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><?=$map['titulo']?></li>
                </ol>
            </section>