<?php

namespace App\Controllers;

class AuthController extends Controller
{
    function login()
    {
        render('auth.login');
    }
}