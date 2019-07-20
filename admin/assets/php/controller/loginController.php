<?php
session_start();

if(isset($_POST['login'])){
    $dados = array(
        ":email" => $_POST['email'],
        ":senha" => sha1($_POST['senha'])
    );
}

if(isset($_SESSION['login_id']) && isset($_SESSION['login_email'])){
    header('Location: index.php');
}
?>