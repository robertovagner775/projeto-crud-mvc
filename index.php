<?php
require __DIR__ .'/vendor/autoload.php';

use \App\utils\View as view;
use \App\controller\HomeController;
use \App\controller\CadastroController;


echo HomeController::getHome();

?>