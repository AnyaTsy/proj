<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show products page.
     *
     * @return mixed
     */
    public function showProductsPage()
    {
        $products = auth()->user()->getPaidProducts();
        return view('app.my-products', compact('products'));
    }

    /**
     * Show the product's page.
     *
     * @param string $product
     * @return mixed
     */
    public function showProductPage(string $product)
    {
        $product = Product::where('slug', $product)->first();
        if(!$product) abort(404);
        return view('app.my-product', compact('product'));
    }

    /**
     * Show the lecture's page.
     *
     * @param string $product
     * @param string $lecture
     * @return mixed
     */
    public function showProductLecturePage(string $product, string $lecture)
    {
        $product = Product::where('slug', $product)->first();
        if(!$product) abort(404);
        $lecture = $product->lectures()->whereSlug($lecture)->first();
        if(!$lecture) abort(404);
        return view('app.my-product-lecture', compact('lecture'));
    }
}
