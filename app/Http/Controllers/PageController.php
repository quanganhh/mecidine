<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Category;
use DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $cate_list = Category::all();
        view()->share('cate_list', $cate_list);
    }

    public function index()
    {
        $list_product_hot = Product::where('hot', 1)->orderBy('id', 'DESC')->get();

        $cate_list = Category::all();
        $data = [];
        foreach ($cate_list as $key => $category) {
            $data[$key]['category_id'] = $category->id;
            $data[$key]['category_name'] = $category->category_name;
            $products = Product::where([
                ['category_id', '=', $category->id] , 
                ['hot','=' ,0],
            ])->orderBy('id', 'DESC')->take(4)->get();
            $data[$key]['products'] = $products;
        }

        return view('page.home.index', compact('data', 'list_product_hot', 'cate_list'));
    }

    public function getCategoryPage($id)
    {
        $cate_list = Category::all();
        $data = Product::where('category_id', $id)->orderBy('id','DESC')->paginate(12);

        return view('page.pageCategory.index', compact('data', 'cate_list'));
    }

    public function getProductDetail(Request $request, $id)
    {
        $product_detail = Product::findOrFail($id);
        $product_cate = Product::where('category_id',$product_detail->category_id)->orderByRaw("RAND()")->get()->take(16);
        $new_product = Product::orderBy('created_at', 'DESC')->take(5)->get();
        
        return view('page.productdetail.index', compact('product_detail','product_cate','new_product'));
    }
}
