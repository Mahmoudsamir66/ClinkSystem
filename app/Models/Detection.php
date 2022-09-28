<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    use HasFactory;
    protected $fillable=['patient_id','age','typeOfIllness','dateOfToday','treatment','dateOfConsultation','doctor_id'];

public function doctors(){

    return $this->belongsTo(Doctor::class,'doctor_id','id');
}
public function patients(){
    return $this->hasMany(Patient::class,'patient_id','id');
}
}
