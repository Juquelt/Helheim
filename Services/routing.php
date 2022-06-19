<?php

require_once realpath('Config\setting.php');

function getRoute(): string {
    $defaultControllerPath = 'Controller/';
    $routesName = array_keys(AVAILABLE_ROUTES);
    $path = realpath($defaultControllerPath . AVAILABLE_ROUTES["home"]);
    if(isset($_GET["page"]) && in_array($_GET["page"], $routesName, true)){
        $path = realpath($defaultControllerPath . AVAILABLE_ROUTES[$_GET["page"]]);
    }
    return $path;
}
