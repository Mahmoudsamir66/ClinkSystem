<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinkName extends Model
{
    use HasFactory;
    protected $fillable=['name','phone'];
    public function doctors(){
        return $this->hasMany(Doctor::class,'clink_id','id');
    }
    //  $doctors=ClinkName::with(['doctors'=>function($q){
    //           $q->select('phone','clink_id');
    //        }])->find(1);
}
