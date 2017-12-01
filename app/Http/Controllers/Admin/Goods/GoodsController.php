<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
    }

    public function index(Request $request)
    {
        $name = $request->get('token_name');

        return view('admin.goods', ['name' => $name]);
    }
}
