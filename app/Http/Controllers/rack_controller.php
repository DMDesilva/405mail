<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rack;
class rack_controller extends Controller
{
    //
    public function store(Request $request){

        $rack = new Rack;
        $rack->rack=$request->rack;
        $rack->rackid=$request->rackid;

        $rack->save();
        return view('/addrack');
    }

    public function display(){

        $racks = Rack::all();
        return view('/rackview')->with('racks',$racks);
    }

    public function view($id){
        $rack =Rack::find($id);
        return view('/viewracks')->with('rack',$rack);

    }

    public function edit($id){
        $rack = Rack::find($id);
        return view('/editracks')->with('rack',$rack);
    }

    public function update(Request $request,$id){

        $rack = rack::find($id);
        
        $rack->rack=$request->input('rack');
        $rack->save();

        return redirect()->back();
    }
}
