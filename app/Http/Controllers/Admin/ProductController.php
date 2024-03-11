<?php

namespace App\Http\Controllers\Admin;

use App\helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use Exception;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all(),
            'subcategories' => Subcategory::all(),
            'subsubcategories' => Subsubcategory::all(),
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        Product::createOrUpdate($request);
        return redirect()->route('product.index')->with('success', 'Product created Successfully...');
    }

    public function edit(string $id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'subcategories' => Subcategory::all(),
            'subsubcategories' => Subsubcategory::all(),
        ]);
    }


    public function update(UpdateProductRequest $request, $id)
    {
        Product::createOrUpdate($request, $id);
        return redirect()->route('product.index')->with('success', 'Proodct Update Successfully....');
    }

    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('product.index')->with('status', 'Product deleted successfully...');
    }
}