<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
class BorrowedController extends Controller
{
    public function index(){
    	$book = books::paginate(2);
    	$borrowed = \DB::table('books')->where('borrowed', '=', 1)->paginate(5);

    	//return view('show')->with('books', $borrowed);
    	return view("borrowed")->with("books", $borrowed);
    }

    public function show($id){
    	$book = books::find($id);

    	$borrowed = DB::table('books')->where('borrowed', '=', 1) -> get();

    	return view('show')->with('books', $borrowed);
    }
}
