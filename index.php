<?php
header("Content-type: text/html; charset=windows-1251");

function __autoload($classname){



    $type = explode('_', $classname);

    switch($type[0]){
        case 'C':
            include_once ('controlers/' . $classname . '.php');
            break;
        case 'M':
            include_once ('models/' . $classname . '.php');
            break;
        default:
            break;
    }
}

switch ($_GET['c'])
{
    case 'article':
        $controller = new C_Article();
        break;
    case 'edit':
        $controller = new C_Edit();
        break;
    case 'new':
        $controller = new C_New();
        break;
    case 'editor':
        $controller = new C_Editor();
        break;
    default:
        $controller = new C_Index();
}

$controller->Request();
?>