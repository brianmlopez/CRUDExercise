<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = ["book_title", "author", "genre", "library_section", "borrowed"];

    /*protected $appends = ['borrowed'];

    public function getBorrowedAttribute() {
    	return $this->active?"Yes":"No";
    }*/

   
}
