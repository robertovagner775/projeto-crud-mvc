<?php

namespace App\controller;
use \App\utils\View;

class HomeController{

    public static function getHome(){

        return View::render("home");
    }
    public function efetuarLogin()
    {
        //responsavel por conectar a model e verificar os dados 
        //Pass e E-mail
    }
}



?>