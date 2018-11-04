<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Order;
use DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        
        $keyword = $request->keyword;
        $data['key'] = $keyword;
        $data['list_order'] = Order::with(['user', 'payment', 'shipment', 'order_status'])->paginate(4);

        return view('admin.order.index', $data);
    }

    public function detail(Request $request)
    {
        $data = [];
        $keyword = $request->keyword;
        $data['key'] = $keyword;
        $data['list_detail'] = Order::with(['user', 'products' ])->get();

        return view('admin.order.detail',$data);
    }

    public function ship(Request $request)
    {
        $id = $request->id;
        $id = is_numeric($id) ? $id : 0;
        if ($id <= 0) {
            echo "ERR";
        } else {
            if (DB::table('orders')->where('id',$id)->update(['order_status_id' => 2])) {
                echo "OK";
            } else {
                echo "FAIL";
            }
        }
    }

    public function done(Request $request)
    {
        $id = $request->id;
        $id = is_numeric($id) ? $id : 0;
        if ($id <= 0) {
            echo "ERR";
        } else {
            if (DB::table('orders')->where('id',$id)->update(['order_status_id' => 3,'ship_date'=>date('Y-m-d H:i:s')])) {
                echo "OK";
            } else {
                echo "FAIL";
            }
        }
    }

    public function ajaxStatus($id)
    {
        $statusOrder = Order::where('id', $id)->first();
        return response()->json($statusOrder);
    }
}
