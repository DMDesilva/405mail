<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addbook_model extends Model
{
    //
    protected $table = 'addbook_models';
    protected $fillable = ['id','bookname','book_id','book_category','book_author','book_publisher','book_rack','status','book_imag'];
}
