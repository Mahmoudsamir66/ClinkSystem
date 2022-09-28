<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClinkName;
use App\Models\Doctor;
use App\Models\Patient;


use App\Traits\generalTraits;
use http\Env\Response;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{  use generalTraits;
   public function index(){
        $doctors=Doctor::with(['patients'=>function($q){
           $q->select('phone','doctor_id');
        }])->find(1);
        $patient=Patient::select('name','age','address')->get();
        $clinks=ClinkName::select('id','name')->get();
        return response()->json([
            'doctors'=>$doctors,
            'patients'=>$patient,
            'clinks'=>$clinks
        ]);

//$clinks=ClinkName::select('id','name_'.app()->getLocale() .'as name')->get(); get name if ar of en in DB
        }
        public function getid(Request $request){
        $doctors=Doctor::find($request-> id);
        if ($doctors){
            return $this->returnData('doctors',$doctors,'success');

        }
           elseif (!$doctors)
               return $this->returnError('011','not found this id');

         return response()->json($doctors);

}
//$clinks=ClinkName::select('id','name_'.app()->getLocale() .'as name')->get(); get name if ar of en in DB

}
