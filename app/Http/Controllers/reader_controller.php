<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reader;

class reader_controller extends Controller
{
    //
    public function store(Request $request){
       // dd($request->all());

       $readers = new Reader;

       $readers->readername=$request->readername;
       $readers->reader_id=$request->reader_id;
       $readers->reader_nic=$request->reader_nic;
       $readers->contact=$request->contact;
       $readers->email=$request->email;
       $readers->job=$request->job;
       $readers->address=$request->address;
       $readers->book_image=$request->book_image;

       if($request->hasfile('book_image')){

        $file =$request->file('book_image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/reader/',$filename);
        $readers->book_image=$filename;

        //hukahapan p
        //ummmmmmma
       }else{
        
           $file ="upload/addbook/dummy.jpg";
       }



$readers->save();
return view('/addreader');
alert('file uploaded!');


    }

    public function display(){

        $readers = Reader::all();
        return view('/readersview')->with('readers',$readers);
    }
}
