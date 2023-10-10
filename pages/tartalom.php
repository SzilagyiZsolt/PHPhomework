<?php

switch ($menu) {
    case 'home':
        require_once './layout/home.php';
        break;
    case 'logout':
        require_once './layout/logout.php';
        break;
    case 'idopont':
        require_once './layout/idopont.php';
        break;
    case 'rendeles':
        require_once './layout/rendeles.php';
        break;
    case 'rolunk':
        require_once './layout/rolunk.php';
        break;
    default:
        require_once './layout/homes.php';
        break;
}