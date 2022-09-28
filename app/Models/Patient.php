<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','age','doctor_id','email','address'];
    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
    public function detections(){
        return $this->belongsTo(Detection::class,'patient_id','id');
    }
}
