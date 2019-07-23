<?php

namespace Controller;

/**
 * Controle de Login, deve ser instaciado, e seu método postLogin chamado
 * Não há necessidade de Instaciar O Model, apenas o controller
 */
class LoginController
{
    private $login;

    public function __construct()
    {
        $this->login = new \Classes\Login;
    }

    public function postLogin()
    {

        $dados = array(
            ":email" => $_POST['email'],
            ":senha" => sha1($_POST['senha'])
        );

        $email = $this->login->checkEmail($dados);

        if ($email) {

            $user = $this->login->validateLogin($dados);

            if ($user) {
                $this->setInitialSession($user);
                $this->checkSession();
            } else {
                $error = \Classes\Message::loginError1;
            }
        } else {
            $error = \Classes\Message::loginError2;
        }
    
        return $error;
    }

    public function setInitialSession($user)
    {
        $_SESSION['login_id']       = $user->id;
        $_SESSION['login_email']    = $user->email;
    }

    public function checkSession()
    {
        if (isset($_SESSION['login_id']) && isset($_SESSION['login_email'])) {
            header('Location: index.php');
        }
    }
}
