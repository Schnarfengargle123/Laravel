<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index (Request $request) {
        // return 1;

        $products = DB::select('SELECT * FROM products');
        return $products;

        // return $request->query();

        // foreach (Product::all() as $product) {
        //     return $product;
        // }
    }
}
