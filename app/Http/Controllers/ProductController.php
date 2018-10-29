<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Session;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     ->where('name','LIKE',"%{$keyword}%")->orWhere('unit_price','LIKE',"%{$keyword}%")->orderBy('id','DESC')->paginate(10)
     */
    public function index(Request $request)
    {
        $data = [];
        $keyword = $request->keyword;
        $data['key'] = $keyword;
        $data['product'] = DB::table('products')
        ->join('categories', 'products.category_id', '=' , 'categories.id')
        ->select('products.*','products.id', 'categories.category_name' , 'products.name')
        ->where('products.name','LIKE',"%{$keyword}%")->orWhere('products.unit_price','LIKE',"%{$keyword}%")->orderBy('id','DESC')->paginate(10);
        // dd($data);
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['categories'] = Category::all();
        return view('admin.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = $request->category_id;
        $name = $request->name;
        $unit_price = $request->unit_price;
        $promotion_price = $request->promotion_price;
        $qty = $request->quantity;
        $short_description = $request->short_description;
        $full_description = $request->full_description;
        $hot              = $request->hot;
        if($hot == '')
        {
            $hot = false;
        }else
        {
            $hot = true;
           
        }
        $data = $request->input('image');
        $checkUpload = false;
        $filename = '';
        if (!empty($request->hasFile('image'))) 
        {
            $file = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $file->move(public_path('/uploads/images'),$filename);
        }
        if ($checkUpload && $filename == '') {
            $request->session()->flash('errUpload','Vui lòng chọn File upload');
            return redirect()->route('products.create',['state'=>'fail']);
        } else 
        {
            $dataInsert = [
                'category_id' => $cate,
                'name' => $name,
                'image' => $filename,
                'unit_price' => $unit_price,
                'promotion_price' => $promotion_price,
                'status' => 1,
                'hot'    => $hot,
                'quantity' => $qty,
                'short_description' => $short_description,
                'full_description' => $full_description,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ];
        }
        if (DB::table('products')->insert($dataInsert))
        {
            return redirect()->route('products.index');
        }else
        {
            return redirect()->route('products.create',['state'=>'err']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){
            $cats[$category->id] =$category->category_name;
        }
        $data = DB::table('products')
        ->join('categories', 'products.category_id', '=' , 'categories.id')
        ->selectRaw('products.*,products.id, categories.category_name, categories.id as category_id, products.name')
        ->where('products.id', '=',$id)->first();
        return view('admin.product.edit', compact('data', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_id = Product::find($id);
        // dd($product_id);
        $cate_id = $request->category_id;
        $name = $request->name;
        $unit_price = $request->unit_price;
        $promotion_price = $request->promotion_price;
        $qty = $request->quantity;
        $short_description = $request->short_description;
        $full_description = $request->full_description;
        $hot              = $request->hot;
        if($hot == '')
        {
            $hot = false;
        }else
        {
            $hot = true;
           
        }
        $data = $request->input('image');
        $checkUpload = false;
        $filename = '';
        if (!empty($request->hasFile('image'))) 
        {
            $checkUpload = true;
            $file = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $file->move(public_path('/uploads/images'),$filename);
        }
        if ($checkUpload && $filename == '') {
            $request->session()->flash('errUpload','Vui lòng chọn File upload');
            return redirect()->route('products.create',['state'=>'fail']);
        } else 
        {
                $product_id->category_id = $cate_id;
                $product_id->name = $name;
                $product_id->image = $filename;
                $product_id->unit_price = $unit_price;
                $product_id->promotion_price = $promotion_price;
                $product_id->status = 1;
                $product_id->hot = $hot;
                $product_id->quantity = $qty;
                $product_id->short_description = $short_description;
                $product_id->full_description = $full_description;
                $product_id->full_description = $full_description;

                $product_id->save();
            return redirect()->route('products.index');
               
        }
            return redirect()->route('products.create',['state'=>'err']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('success', 'Xóa thành công !');
        
        return redirect()->route('products.index');
        // dd($product);
    }
}
