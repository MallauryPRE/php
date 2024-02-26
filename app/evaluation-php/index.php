<?php declare(strict_types=1);
require_once 'fonctions.php';
require_once 'entity/personne.php';
require_once 'entity/listepersonnes.php';
require_once 'controller/controller.php';

$page =routingPage($_GET);

switch ($page) {
    case 'home':
        $content = homePage();
        break;
        case 'list':
            $param =getParamSearch($_GET);
        $content = listerPage($param);
            break;
        case 'details':
            $param =getParamDetail($_GET);
        $content = detailsPage($param);
            break;
    default:
        $content = homePage();
        break;
}
include 'templates/base.php';
