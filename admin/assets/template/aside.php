<?php
$rename = function($name){
    return explode('Controller.php', $name)[0];
};
$controller = array_diff(scandir('./assets/php/controller/'), array('..', '.', 'loginController.php', 'userController.php'));
$names = array_map($rename, $controller);

$labels = array(
    "Teste" => array(
        "name" => 'Teste',
        "link" => 'teste.php',
        "icon" => '<i class="fa fa-th"></i>',
        "subs" => array(),
    ),
);
?>