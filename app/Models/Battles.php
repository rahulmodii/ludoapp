<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battles extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function creator(){
       return $this->belongsTo(User::class,'creator_id');
    }

    public function requestie(){
        return $this->belongsTo(User::class,'request_id');
     }
}
