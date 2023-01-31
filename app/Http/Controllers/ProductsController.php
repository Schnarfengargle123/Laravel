<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index (Request $request) {
        // return 1;

        return $request->query();

        // foreach (Product::all() as $product) {
        //     return $product;
        // }
    }
}
