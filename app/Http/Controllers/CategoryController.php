<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Book;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories  = Category::all()->load('subcategories');
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(REQUEST $request){

        $validatedData = $request->validate([
            'name' => 'required|min:3|unique:categories',
            'description' => 'max:255',
        ]);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
        $category->slug = Str::slug($validatedData['name'], '-');

        $category->user_id = auth()->id();
        $category->save();

        $status = "Categoria creada exitosamente";
        return back()->with(compact('status'));
    }
}
