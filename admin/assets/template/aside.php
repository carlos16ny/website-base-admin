<?php
$rename = function($name){
    return explode('Controller.php', $name)[0];
};
$controller = array_diff(scandir('./assets/php/controller/'), array('..', '.', 'loginController.php', 'userController.php'));
$names = array_map($rename, $controller);

$labels = array(
    "Links" => array(
        "name" => 'Teste Menu',
        "link" => 'pages/components.php',
        "icon" => '<i class="fa fa-th"></i>',
        "subs" => array(
            "Sub-Link 1" => array(
                "link" => '#',
                "icon" => '<i class="fa fa-circle-o"></i>',
                'name' => 'SubLink1'
            ),
            "Sub-Link 2" => array(
                "link" => '#',
                "icon" => '<i class="fa fa-circle-o"></i>',
                'name' => 'SubLink2'
            ),
            "Sub-Link 3" => array(
                "link" => '#',
                "icon" => '<i class="fa fa-circle-o"></i>',
                'name' => 'SubLink3'
            ),
        ),
    ),
    "Exemplos" => array(
        "name" => 'Exemplos',
        "link" => 'pages/components.php',
        "icon" => '<i class="fa fa-edit"></i>'
    ),
);
?>