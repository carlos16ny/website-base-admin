<?php
session_start();
if(!isset($_SESSION['login_id']) && !isset($_SESSION['login_email'])){
    session_start();
    session_destroy();
    header('Location: login.php');
}

?>