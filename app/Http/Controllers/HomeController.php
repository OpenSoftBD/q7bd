<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("front.home.index", [
            "categories" => Category::all(),
            "products" => Product::all(),
        ]);
    }

    public function productdetail($id)
    {
        return view("front.product.detail", [
            "categories" => Category::all(),
            "product" => Product::find($id),
        ]);
    }

    public function productcategory($id)
    {
        return view("front.product.category", [
            "categories" => Category::all(),
            'category' => Category::find($id),
            "products" => Product::where("category_id", $id)->get(),
        ]);
    }
}
