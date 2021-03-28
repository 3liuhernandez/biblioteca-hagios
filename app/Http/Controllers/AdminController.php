<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
class AdminController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::paginate(10);
        $categories =  Category::orderBy('name', 'ASC')->paginate(10);
        return view('admin.index', compact('categories'), compact('users'));
    }
}
