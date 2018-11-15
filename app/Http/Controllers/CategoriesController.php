<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use DB;
use Session;
use Validator;
use Input;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $keyword = $request->keyword;
        $data['key'] = $keyword;
        $data['listCate'] = Category::where('category_name','LIKE',"%{$keyword}%")->orderBy('id','DESC')->paginate(10);
        return view('admin.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $rq)
    {
        $category = new Category;
        $category->category_name = $rq['name'];
        $category->image = 0;
        // if(Input::hasFile('logo'))
        // {
        //     return 'file present';
        // }else
        // {
        //     return "file not present";
        // }
        $category->save();

        Session::flash('message', 'Thêm mới thành công !');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
       // $data = Category::find($id);
       //  $data->name = $request['name'];
       //  return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->products()->count() == 0)
        {
            $category->delete();
            Session::flash('success', 'Xóa thành công !');
        }else
        {
            Session::flash('wanning', 'Không thể xóa danh mục có sản phẩm !');
        }
        
        return redirect()->route('categories.index');

    }

    public function ajaxEdit(Request $req, $id)
    {
        $data = Category::find($req->id);
            $data->category_name = $req['name'];
            $data->save ();
            $title = $data->category_name;

            return response()->json($title); 
    }
}
