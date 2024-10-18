<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function specialty(){
        return $this->belongsTo(Specialty::class,'specialty_id','id');
    }

}
