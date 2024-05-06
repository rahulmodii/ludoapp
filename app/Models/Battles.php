<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battles extends Model
{
   use HasFactory;

   protected $guarded = [];

   public function winner()
   {
      return $this->belongsTo(User::class, 'winning_id');
   }

   public function creator()
   {
      return $this->belongsTo(User::class, 'creator_id');
   }

   public function joinee()
   {
      return $this->belongsTo(User::class, 'joining_id');
   }

   public function requestie()
   {
      return $this->belongsTo(User::class, 'request_id');
   }
}
