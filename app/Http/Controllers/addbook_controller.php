<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addbook_model;
use \Input as Input;

class addbook_controller extends Controller
{
    public function store(Request $request){

        // dd($request->all());

        $addbook = new addbook_model;

        $addbook->bookname = $request->bookname;
        $addbook->book_id = $request->book_id;
        $addbook->book_category = $request->book_category;
        $addbook->book_author = $request->book_author;
        $addbook->book_publisher = $request->book_publisher;
        $addbook->book_rack = $request->book_rack;
        $addbook->book_image = $request->book_image;

        if($request->hasfile('book_image')){

                $file =$request->file('book_image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('upload/addbook/',$filename);
                $addbook->book_image=$filename;

                //hukahapan p
                //ummmmmmma
               }else{
                
                   $file ="upload/addbook/dummy.jpg";
               }
       


        $addbook->save();
        return view('/addbook');
        alert('file uploaded!');
    }

    public function display(){

        $addbooks = addbook_model::all();
        return view('bookview')->with('addbooks',$addbooks);

    }

    public function edit($id){
        $addbooks = addbook_model::find($id);
        return view('bookedit')->with('addbooks',$addbooks);
    }

    public function show($id){
        $addbooks = addbook_model::find($id);
        return view('/bookdetail')->with('addbooks',$addbooks);
        
    }

    public function update(Request $request ,$id){


    //dd($request->all());
         $addbooks = addbook_model::find($id);
       
        //dd($addbooks);
         $addbooks->bookname = $request->input('book');
         $addbooks->book_id = $request->input('book_id');
         $addbooks->book_category = $request->input('book_category');
         $addbooks->book_author = $request->input('book_author');
         $addbooks->book_publisher = $request->input('book_publisher');
         $addbooks->book_rack = $request->input('rack');
         $addbooks->status = $request->input('status');
        // $addbooks->book_image = $request->input('image1');

         if($request->hasfile('image1')){

                $file =$request->file('image1');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('upload/addbook/',$filename);
                $addbooks->book_image=$filename;

               
               }
               else{
                $file ="upload/addbook/dummy.jpg";
               }
               
               $addbooks->save();
               return redirect()->back();
            
            
    }


    public function selectcategory(){

        $categoris = new category;
        $data1 = category::select('category','id')->where('categories','=',1)->get();
        return view ('/addbook')->with('$categoris',$data1);;
    }




    // function index(){
    //    // $categoris=category;

    //     return view ('addbook');
    // }

    // function fetch(Request $request){
    //     if($reques t->get('query')){
    //         $query = $request->get('query');
    //         $data = DB::table('categories')
    //         ->where('category','LIKE','%{$query}%')
    //         ->get();

    //         $output = '<ul class="dropdown-menu" style="display:block;position:relative;">';
    //         foreach($data as $row){
    //             $output .= '<li><a href="#">' .$row->category.'</a></li>';
    //         }
    //         $output .= '</ul>';
    //         echo $output;
    //     }
    // }

    // public function addbookdata(Request $r){

    //     return response()->json(['data'=>'hi']);
    // }

}

