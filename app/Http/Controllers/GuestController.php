<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $role = auth()->user()->role;
        if($role > 0) {
            return view('home', compact('categories'));
        }else{
            return redirect()->route('admin.home');
        }
    }
}
