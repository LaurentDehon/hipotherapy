<?php

app()->get('/', 'MainController@home'); 
app()->get('/about', 'MainController@about');
app()->get('/customers', 'CustomerController@index');

app()->group('/auth', function ()
{
    app()->get('/login', 'AuthController@login');
});