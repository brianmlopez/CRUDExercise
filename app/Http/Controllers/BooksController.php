<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use Validator;
class BooksController extends Controller
{
    public function index(){
    	$book = books::paginate(5);
    	return view("books")->with("books", $book);
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
    		return redirect("/addform")->withErrors($validator)->withInput();
    	}

    	$book = new books;
    	$book->book_title = $request->input('book_title');
    	$book->author = $request->input('author');
    	$book->genre = $request->input('genre');
    	$book->library_section = $request->input('library_section');
    	$book->save();

    	echo "Successfully Added!";
    }

    public function create(){
    	return view('addform');
    }

    public function show($id){
    	$book = books::find($id);
    	return view('show')->with('books', $book);
    }

    public function edit($id){
    	$book = books::find($id);
    	return view('editform')->with('books', $book);
    }

    public function update(Request $request, $id){

    	$book = books::find($id);
    	$book->book_title = $request->book_title;
    	$book->author = $request->author;
    	$book->genre = $request->genre;
    	$book->library_section = $request->library_section;
        $book->borrowed = $request->borrowed;
    	$book->save();

    	return redirect('/books')->with('message', 'Successfully updated!');
    	
    }

    public function destroy($id){
    	books::destroy($id);
    	return redirect('/books')->with('messageDel', 'Successfully deleted!');
    }

}
