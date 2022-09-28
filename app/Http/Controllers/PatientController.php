<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
  function create(){
      $doctors=Doctor::get();
      $patients=Patient::get();
      return view('patient.create',compact('doctors','patients'));
  }
    function store(Request $request){
        Patient::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'age'=>$request->age,
            'address'=>$request->address,
            'doctor_id'=>$request->doctor_id,
        ]);
        return redirect()->back()->with(['success'=>'تم بنجاح']);
    }
}
