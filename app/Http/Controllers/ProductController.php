<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    //view product
    public function ProductView(){
        return view('admin.products.index');
    }
    //add product
    public function AddProduct(){
        return view('admin.products.add_product');
    }
}
