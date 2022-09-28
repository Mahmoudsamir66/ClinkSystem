<?php

namespace App\Http\Controllers;

use App\Models\ClinkName;
use Illuminate\Http\Request;

class clink extends Controller
{
    function create(){
        $clinks=ClinkName::get();
        return view('clink.create',compact('clinks'));
    }
    function store(Request $request){
        ClinkName::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);
        return redirect()->back()->with(['success'=>'تم بنجاح']);
    }
}
