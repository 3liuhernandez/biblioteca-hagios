<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(REQUEST $request){

        $validatedData = $request->validate([
            'book' => 'required',
            'name' => 'required|min:3|unique:books',
            'description' => 'max:255',
            'sub_category_id' => 'required'
        ]);
        /* dd($request->all()); */

        $book = new Book();
        $book->name = $validatedData['name'];
        $book->description = $validatedData['description'];

        $book->slug = Str::slug($validatedData['name'], '-');

        $extension = $request->book->extension();
        $filename = $validatedData['name'].$extension;
        $path = $request->book->storeAs('books', $filename);
        /* dd($path); */
        $book->path = $path;


        $book->sub_category_id = $validatedData['sub_category_id'];
        $book->user_id = auth()->id();
        $book->save();

        $status = "Book: '". $filename."'. Has been uploaded successfully to subcategory ID: ".$validatedData['sub_category_id']."";
        return back()->with(compact('status'));
    }
}
