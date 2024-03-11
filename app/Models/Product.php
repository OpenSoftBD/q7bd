<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function createOrUpdate($request, $id = null)
    {
        Product::updateorcreate(
            ['id' => $id],
            [
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'regular_price' => $request->regular_price,
                'sale_price' => $request->sale_price,
                'product_status' => $request->product_status,
                'product_code' => Helper::serialnumber(),
                'brand' => $request->brand,
                'key_features' => $request->key_features,
                'meta_title' => $request->meta_title,
                'meta_url' => $request->meta_url,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'topbar_heading' => $request->topbar_heading,
                'topbar_description' => $request->topbar_description,
                'bottom_description' => $request->bottom_description,
                'image' => Helper::uploadFile($request->file('image'), 'product', isset($id) ? Product::find($id)->image : null),
            ]
            );
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function subsubcategory()
    {
        return $this->belongsTo(Subsubcategory::class);
    }
}
