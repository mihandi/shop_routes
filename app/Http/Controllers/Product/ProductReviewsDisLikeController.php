<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductReviewsDisLikeController extends Controller
{
    public function store($id)
    {
        echo 'create dislike for ProductReview '. $id;
    }
}
