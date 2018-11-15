<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$data = [];
        $keyword = $request->keyword;
        $level = $request->level;
        $data['key'] = $keyword;
        $queryByName = [
            ['level', '<>', -1],
            ['name', 'LIKE', "%{$keyword}%"]
        ];
        $queryByEmail = [
            ['level', '<>', -1],
            ['email', 'LIKE', "%{$keyword}%"]
        ];
        if (isset($level) && $level != -1) {
            $queryByName[] = ['level',$level];
            $queryByEmail[] = ['level',$level];
        }
        $data['listAccount'] = User::where($queryByName)->orWhere($queryByEmail)->paginate(7);
        
        return view('admin.user.index',$data);
    }
}
