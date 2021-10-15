<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documenttype extends Model
{
    public function people()
     {
         return $this->hasMany(people::class);
     }
}
