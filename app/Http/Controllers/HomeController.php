<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\PageContent;
use App\models\product\ProductCombo;
use App\models\product\TypeProduct;
use  App\models\ReviewCus;
use App\models\website\Prize;
use App\models\website\Video;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerAds'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['bannerProHot'] = BannerAds::where('status',2)->get(['name','image','id']);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['video'] = Video::where(['status'=>1])->first();
        $data['aboutUs'] = PageContent::where(['status'=>1, 'type'=>'ve-chung-toi', 'language'=>'vi'])->first();
        $data['reviewCus'] = ReviewCus::where('status',1)->get(['name','content','avatar']);
        $data['typeProHome'] = TypeProduct::where(['status'=>1, 'home_status'=>1])->limit(6)->get(['id', 'name', 'slug', 'avatar', 'cate_slug']);
        $data['homeProduct'] = Product::where(['status'=>1, 'discountStatus'=>1])->limit(12)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size']);
        $data['homeProductNew'] = Product::where(['status'=>1, 'discountStatus'=>1])->orderBy('id', 'desc')->limit(12)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size']);
        $data['homeBlog'] = Blog::where(['status'=>1, 'home_status'=>1])->orderBy('id', 'desc')->limit(10)->get(['id','title','image','slug','category']);
        $data['comboProduct'] = ProductCombo::with([
            'products'=>function($query) {
                $query->where('status', 1)->select();
            }
        ])->where('status', 1)->get();
        return view('home',$data);
    }
}
