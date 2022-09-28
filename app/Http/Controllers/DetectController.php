<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DetectController extends Controller
{
    function create(){

        $doctors=Doctor::get();
        $patients=Patient::get();
        $detects=Detection::get();
//        dd($doctors);
        return view('detect.create',compact('doctors','patients','detects'));
    }
    function store(Request $request){

        Detection::create([
            'patient_id'=>$request->patient_id,
            'age'=>$request->age,
            'typeOfIllness'=>$request->typeOfIllness,
            'dateOfToday'=>$request->dateOfToday,
            'treatment'=>$request->treatment,
            'dateOfConsultation'=>$request->dateOfConsultation,
            'doctor_id'=>$request->doctor_id,
        ]);
        return redirect()->back()->with(['success'=>'تم بنجاح']);
    }
}
