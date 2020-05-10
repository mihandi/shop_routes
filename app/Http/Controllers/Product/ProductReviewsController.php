<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductReviewsController extends Controller
{

    public function index($id)
    {
        echo 'Show product reviews';
    }

    public function store($id)
    {
        echo 'create review for product '. $id;
    }

}
