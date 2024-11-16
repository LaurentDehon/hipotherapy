<?php

namespace App\Controllers;

class MainController extends Controller
{
    function home()
    {
        render('main.home');
    }

    function about()
    {
        $text = '<h1>Ceci est mon about</h1>';
        render('main.about', ['message'=>$text]);
    }
}