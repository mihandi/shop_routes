<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function index()
    {
        echo 'Order details and payment form';
    }

    public function store()
    {
        echo 'validation and payment process';
    }
}
