<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show product view.
     *
     * @param Product $product
     * @return mixed
     */
    public function index(Product $product) {

        return view('app.product', compact('product'));
    }
}
