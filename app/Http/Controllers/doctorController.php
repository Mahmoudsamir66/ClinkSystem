<?php

namespace App\Http\Controllers;

use App\Models\ClinkName;
use App\Models\Doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{
   function create(){
        $clinks=ClinkName::get();
        $doctors=Doctor::get();
       return view('doctor.create',compact('clinks','doctors'));
   }
    function store(Request $request){
        Doctor::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'salary'=>$request->salary,
            'Specialization'=>$request->Specialization,
            'Specialization'=>$request->Specialization,
            'clink_id'=>$request->clink_id,
        ]);
        return redirect()->back()->with(['success'=>'تم بنجاح']);
    }
}
