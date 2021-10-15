<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $fillable = [
        'name',
        'last_names',
        'email',        
        'username',  
        'password',  
        'residence_place',
        'document',  
        
    ];

    //Relación n-1 con cities
    public function city()
    {
        return $this->belongsTo(cities::class);
    }
    //Relación n-1 con documenttype
    public function documenttype()
    {
        return $this->belongsTo(documentypes::class);
    }
}
