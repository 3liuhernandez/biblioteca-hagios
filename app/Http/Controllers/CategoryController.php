<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Category;

class CategoryController extends Controller
{
    function __construct()
    {

    }

    public function index()
    {
        $categories = Category::all();
    }

    public function store()
    {
        
    }
}
