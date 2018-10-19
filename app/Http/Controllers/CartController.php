<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Model\Product;
use Session;
use App\Model\Category;
use App\Model\Order;

class CartController extends Controller
{
    public function __construct()
    {
        $cate_list = Category::all();
        view()->share('cate_list', $cate_list);
    }

    public function getAddCart(Request $request ,$id)
    {
        $productCart = Product::where('id',$id)->first();
           $cart = Cart::add([
            'id'         => $id,
            'name'       => $productCart->name,
            'quantity'   => $request->quantity,
            'unit_price' => $productCart->unit_price,
            
            'attributes' => array(
            'image'      => $productCart->image,
            'totalPrice' => $productCart->unit_price*$request->quantity,
            )
        ]);
           $subTotal = 0;
           foreach (Cart::getcontent() as $key => $value) {
               $subTotal  += $value->attributes->totalPrice;
               Session::put('subTotal', $subTotal);  
           }
             
        Session::put('cart', Cart::getcontent());
         return redirect()->back();
    }
    
    public function getShowCart()
    {
        // cai ma hien ra tong tien, so luong, la ham nao o
        $data['subTotal'] = Cart::getTotal();
        // dd($data['subTotal']);
        $data['items'] = Cart::getcontent();
 
         // dd($data);
        return view('page.cart.index',$data);
    }

    public function getDeleteCart()
    {
        Cart::clear();
        session()->flush();
    }
}
