<?php

namespace App\Http\Controllers;

use App\Models\ClinkName;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function welcome(){
        $doctors=Doctor::get();
        $patients=Patient::get();
        $clinks=ClinkName::get();
        return view('welcome',compact('doctors','patients','clinks'));
    }
//    function ajax(){
//
//        return view('ajax');
//    }
//    function api(){
//
//        return view('ajax');
//    }
}
