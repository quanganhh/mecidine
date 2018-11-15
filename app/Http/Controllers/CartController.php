<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Model\Product;
use Session;
use App\Model\Category;
use App\Model\Order;
use App\Model\Shipment;
use App\Model\Payment;
use App\User;
use App\Model\OrderProduct;
use Auth;
use DB;

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
            'totalPrice' => $productCart->unit_price,
            )
        ]);
        $subTotal = 0;
        foreach (Cart::getcontent() as $key => $value) 
        {
            $subTotal  += ($value->attributes->totalPrice*$value->quantity);
            Session::put('subTotal', $subTotal);  
        }  
        Session::put('cart', Cart::getcontent());

         return redirect()->back();
    }
    
    public function getShowCart(Request $request)
    {
        $data['subTotal'] = Cart::getTotal();
        $data['items'] = Cart::getcontent();
        $this->validate($request,
        [
            'name.required'       => 'Vui lòng nhập họ và tên',
            'phone.required'      => 'Vui lòng nhập số điện thoại',
            'email.required'      => 'Vui lòng nhập email',
            'address.required'    => 'Vui lòng nhập địa chỉ',
        ]);
        $user = Auth::user();

        return view('page.cart.index')->withData($data)->withUser($user);
    }

    public function getDeleteCart(Request $request, $id)
    {
        $products = Session('cart');
        foreach ($products as $key => $value)
        {
            $total = Session::get('subTotal') - ($value['attributes']['totalPrice']*$value->quantity);
            if ($value['id'] == $id) 
            {     
                Cart::remove($id);
                Session::put('subTotal', $total);
            }
            unset($products[$key]);
            break;          
        }
        
        return redirect()->back();
    }

    public function postCompleteCart(Request $request)
    {
        $total_price = Session::get('subTotal');
        $this->validate($request,
        [
            'rd-trans.required'       => 'Vui lòng chọn hình thức giao hàng',
        ]);
        $shipment = new Shipment();
        $shipment->status = $request['rd-trans'];
        $shipment->cost   = 0;
        if($shipment->status == 0)
        {
            $shipment->name = ' Hỏa tốc (dưới 2h)';
        }elseif($shipment->status == 1)
        {
            $shipment->name = 'Nhanh (2-3 ngày)';
        }else
        {
            $shipment->name = 'Tiết kiếm(5-7 ngày)';
        }
        $shipment->save();
        $payment = new Payment();
        $payment->status = $request['payment'];
        if($payment->status == 0)
        {
            $payment->name = 'Nhận hàng rồi thanh toán';
        }else
        {
            $payment->name = 'Thanh toán qua ATM';
        }
        $payment->save();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->payment_id = $payment->id;
        // $order->order_status_id = 1;
        $order->shipment_id = $shipment->id;
        $order->address =  Auth::user()->address;
        $order->total_price = $total_price;
        $order->status = 0;
        $order->save();
        //luu chi tiet don hang
        foreach (Cart::getContent('cart') as $key => $value) {
            $order_product = new OrderProduct();
            DB::table('order_product')->insert([
                'product_id' => $value->id,
                'order_id' => $order->id,
                'quantity' => $value->quantity,
            ]);
        }
        
        return redirect()->back();
    }
}
