<?php
session_start();

$login = new Login();

if (isset($_POST['login'])) {

    $dados = array(
        ":email" => $_POST['email'],
        ":senha" => sha1($_POST['senha'])
    );

    $email = $login->checkEmail($dados);

    if ($email) {

        $user = $login->validateLogin($dados);

        if ($user) {
            $_SESSION['login_id']       = $user->id;
            $_SESSION['login_email']    = $user->email;
        } else {
            $error = Message::loginError1;
        }
    } else {
        $error = Message::loginError2;
    }
}

if (isset($_SESSION['login_id']) && isset($_SESSION['login_email'])) {
    header('Location: index.php');
}
