<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //Relación 1-n con branches - users
     public function people()
     {
         return $this->hasMany(people::class);
     }
}
