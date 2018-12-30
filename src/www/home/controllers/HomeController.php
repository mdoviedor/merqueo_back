<?php

namespace www\home\controllers;

/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 06:23 PM
 */



class HomeController
{


    public function index() {
        return view('home::home');
    }

}