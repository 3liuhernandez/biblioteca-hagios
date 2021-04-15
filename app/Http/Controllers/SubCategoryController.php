<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index_guest()
    {
        $sub_categories  = SubCategory::all()->load('subcategories');
        return view('guest.categories.index', compact('sub_categories'));
    }

    public function show_guest($category_id)
    {
        $sub_categories  = SubCategory::all()->where('id', '=', $category_id)->load('subcategories');
        $categories  = SubCategory::all()->load('subcategories');
        return view('guest.categories.show', compact('categories'), compact('sub_categories'));
    }


    public function store(REQUEST $request){

        $validatedData = $request->validate([
            'name' => 'required|min:3|unique:sub_categories',
            'description' => 'max:255',
            'category_id' => 'required'
        ]);

        $sub_category = new SubCategory();
        $sub_category->name = $validatedData['name'];
        $sub_category->description = $validatedData['description'];
        $sub_category->slug = Str::slug($validatedData['name'], '-');
        $sub_category->category_id = $validatedData['category_id'];
        $sub_category->user_id = auth()->id();
        $sub_category->save();

        $status = "SubCategoria creada exitosamente";
        return back()->with(compact('status'));

        /* $path = $request->file('avatar')->store(
            'avatars/'.$request->user()->id, 's3'
        ); */
    }
}