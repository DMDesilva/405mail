<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;

class publisher_controller extends Controller
{
    //
    public function store(Request $request){

        //dd($request->all());

        $publisher = new Publisher;

        $publisher->Publisher=$request->publishername;
        $publisher->pub_id=$request->publisherid;
        $publisher->contact=$request->pcontact;
        $publisher->email=$request->pemail;
        $publisher->address=$request->address;

        $publisher->save();
        return view('addpublisher');
    }

    public function display (){
        $publishers=Publisher::all();
        return view('/publisherview')->with('publishers',$publishers);
    }

    public function view ($id){
        $publishers =Publisher::find($id);
        return view ('/viewpublisher')->with('publishers',$publishers);
    }

    public function edit($id){
        $publishers = Publisher::find($id);
        return view ('/editpublishers')->with('publishers',$publishers);
    }

    public function update(Request $request,$id){

        $publishers =Publisher::find($id);

        $publishers->Publisher=$request->input('publishername');
        $publishers->pub_id=$request->input('publisherid');
        $publishers->contact=$request->input('pcontact');
        $publishers->email=$request->input('pemail');
        $publishers->address=$request->input('address');

        $publishers->save();
        return redirect()->back();
    }
}
