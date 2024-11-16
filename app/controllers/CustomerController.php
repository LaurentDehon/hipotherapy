<?php

namespace App\Controllers;
use App\Models\Customer;

class CustomerController extends Controller
{
    function index()
    {
        $titre = 'Customers';
        $customers = Customer::all();
        render('customer.index', ['titre'=>$titre, 'customers'=>$customers]);
    }
}