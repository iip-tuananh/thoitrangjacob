<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\models\product\Product;
use App\models\product\ProductBrands;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function listProductBrand($slug, $cate){
        if ($cate == 'all') {
            $data['list'] = Product::where(['status'=>1,'brand_slug'=>$slug])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size')
            ->paginate(12);
        } else {
            $data['list'] = Product::where(['status'=>1,'brand_slug'=>$slug, 'cate_slug'=>$cate])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size')
            ->paginate(12);
        }
        $data['brands'] = ProductBrands::where('status', 1)->orderBy('order_id','ASC')->get();
        $brand = ProductBrands::where('slug', $slug)->first();
        $data['title'] = $brand->name;
        return view('product.list',$data);
    }

    public function allProductBrand()
    {
        $data['brands'] = ProductBrands::where('status', 1)->orderBy('order_id','ASC')->get();
        $data['title'] = 'Tất cả thương hiệu';
        return view('product.list-brand', $data);
    }
}
