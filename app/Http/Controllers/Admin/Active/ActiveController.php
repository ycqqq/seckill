<?php

namespace App\Http\Controllers\Admin\Active;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
    }

    public function index(Request $request)
    {
        $name = $request->get('token_name');

        return view('admin.active', ['name' => $name]);
    }
}
