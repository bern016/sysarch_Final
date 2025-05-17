<?php
namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('reviews')->get();
        return view('products.index', compact('products'));
    }
}
