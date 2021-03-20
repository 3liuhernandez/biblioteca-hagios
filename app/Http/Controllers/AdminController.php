<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class AdminController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categorias =  Category::orderBy('name', 'DESC');
        return view('admin.index', compact('categorias'));
    }
}
