<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductReviewsLikeController extends Controller
{
    public function store($id)
    {
        echo 'create like for ProductReview '. $id;
    }
}
