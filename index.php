<?php

declare(strict_types=1);
namespace App;
 

require_once("src/utils/debug.php");
require_once("src/View.php");


const DEFAUL_ACTION = 'list';

$action = $_GET['action'] ?? DEFAUL_ACTION;


$viewParams = [];
if ($action === 'create') {
    $page = 'create';
    $viewParams['resultCreate'] = "udalo się";
}
else  {
    $page = 'list';
    $viewParams['resultList'] = "Wyswietlamy notatki";
}




$view = new View();
$view->render($page, $viewParams);
 


