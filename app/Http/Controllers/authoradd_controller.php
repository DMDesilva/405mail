<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class authoradd_controller extends Controller
{
    //
    public function store(Request $request){

       // dd($request->all());

        $authors= new Author;

        $authors->authorname=$request->authorname;
        $authors->authorid=$request->authorid;
        

        $authors->save();
        return view('addauthor');
    }

    public function display(){

        $authors = Author::all();
        return view('authorview')->with('authors',$authors);
    }

    // public function edit($id){

    //     $authors = Author::find($id);
    //     return view('editauthor')->with('authors',$authors);
    // }

    public function edit($id){
        $authors = Author::find($id);
        return view('/editauthor')->with('authors',$authors);
    }

    public function view($id){
        $authors = Author::find($id);
        return view('/viewauthordetail')->with('authors',$authors);
        return view('/editauthor')->with('authors',$authors);
    }
    public function update(Request $request ,$id){
        //dd($request->all());
        $author = Author::find($id);     
        $author->authorname = $request->input('authorname');

               $author->save();
               return redirect()->back();
            
    }

}
