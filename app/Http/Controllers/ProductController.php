<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PDO;

class ProductController extends Controller
{
    public function index(){
        $produk = Product::all();
        return view('product',[
            'product' => $produk,
            'title' => 'produk'
        ]);
    }
}
