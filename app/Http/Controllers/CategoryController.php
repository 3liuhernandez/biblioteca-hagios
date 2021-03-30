<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $left = DB::table('categories')
            ->leftJoin('sub_categories', 'categories.id', '=', 'sub_categories.user_id')
            ->get();

        $right = DB::table('categories')
            ->rightJoin('sub_categories', 'categories.id', '=', 'sub_categories.user_id')
            ->get();

        $categories = Category::all();
        return view('categories.index', compact('categories'), compact('right'), compact('left'));
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
