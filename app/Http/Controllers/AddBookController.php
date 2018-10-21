<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use Validator;
class AddBookController extends Controller
{
    public function index(){
    	$book = books::paginate(5);
    	return view("addbook")->with("books", $book);
    }

    public function store(Request $request){

    	$validator = Validator::make($request->all() ,
    		[
    		"book_title" => "required|min:5|max:50|unique:books",
    		"author" => "required|min:5|max:50",
    		"genre" => "required|min:5|max:50",
    		"library_section" => "required|min:5|max:50"
    	]);

    	if($validator->fails()){
    		return redirect("/addbook")->withErrors($validator)->withInput();
    	}

    	$book = new books;
    	$book->book_title = $request->input('book_title');
    	$book->author = $request->input('author');
    	$book->genre = $request->input('genre');
    	$book->library_section = $request->input('library_section');
    	$book->save();

    	return redirect('/book-list')->with('message', 'Successfully added!');
    }

    public function create(){
    	return view('addbook');
    }	
}
