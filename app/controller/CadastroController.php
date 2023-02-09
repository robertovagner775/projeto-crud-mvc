<?php

namespace App\controller;
use \App\utils\View;


class CadastroController {

    public static function getCadastroView(){

        return View::render("cadastro");
    }
}



?>