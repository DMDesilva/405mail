<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class category_controller extends Controller
{
    //
    public function store(Request $request){

        //dd($request ->all());

        $category =new category;

        $category->category=$request->category;
        $category->category_id=$request->category_id;
        $category->save();

        return view('/addcategory');

    }

    
      
        public function display(){

            $addcategory = category::all();
            return view('/categoryview')->with('addcategory',$addcategory);
    
        }

        public function view($id){
            $addcategory = category::find($id);
            return view('/viewcategories')->with('addcategory',$addcategory);
        }

        public function edit($id){
            $addcategory = category::find($id);
            return view('/editcategoris')->with('addcategory',$addcategory);
        }

        public function update (Request $request,$id){

            //dd($request->all());

            $categories = category::find($id);

            $categories->category=$request->input('category');

            // $category->save();
            // return redirect()->back();
            $categories->save();
            return redirect()->back();
        }

}
