<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\books;
class SearchController extends Controller
{

	public function index(){
		$book = books::paginate(5);
    	//$books = books::all();
    	return view("sampleSearch")->with("books", $book);
    }

    public function search($id){
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

    }

    public function store() {
    	return view("sampleSearch");
    }
}
