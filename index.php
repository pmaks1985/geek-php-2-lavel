<?php
require_once './db.php';

spl_autoload_register('c_autoload');
function c_autoload($classname){
    include_once("c/$classname.php");
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = false;
}

if (isset($_GET['c'])) {
    if ($_GET['c'] == 'page') {
        $controller = new C_Page();
    } else if ($_GET['c'] == 'user') {
        $controller = new C_User();
    } else if ($_GET['c'] == 'admin') {
        $controller = new C_Admin();
    }
} else {
    $controller = new C_Page();
}

$controller->Request($action, $id);

