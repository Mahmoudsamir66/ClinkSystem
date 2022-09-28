<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','email','salary','Specialization','clink_id'];

   public function clinks(){
       return $this->belongsTo(ClinkName::class,'clink_id','id');
   }
    public function patients(){
        return $this->hasMany(Patient::class,'doctor_id','id');
    }

public function detects(){
       return $this->hasMany(Detection::class,'doctor_id','id');
}

}
