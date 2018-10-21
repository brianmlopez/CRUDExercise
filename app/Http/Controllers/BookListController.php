<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class BookListController extends Controller
{

	public function index(){

		$book = \DB::table('books')->where('borrowed', '=', 0)->paginate(5);
		//$book = books::paginate(5);
    	//$books = books::all();
    	return view("book-list")->with("books", $book);
    }

    public function show($id){
    	$book = books::find($id);
    	return view('show')->with('books', $book);
    }

    /*public function search($id){
    	$search = Input::get('search');
    	
    	if($search != "") {
    		$book = books::where ('book_title', 'LIKE' .$search. '%')
    						->orWhere ('author', 'LIKE' .$search. '%')
    						->orWhere ('genre', 'LIKE' .$search. '%')
    						->orWhere ('library_section', 'LIKE' .$search. '%')
    						->get();
    		if(count($book) > 0)
    			return view('sampleSearch')->withDetails($book)->withQuery($search);
    	}
    	return view('sampleSearch')->withMessage("No data found!");

    }*/
}
