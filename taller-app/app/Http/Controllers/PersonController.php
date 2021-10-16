<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function showAll(){
        return Person::all();
    }

    public function show($id){
        return Person::find($id)->first();
    }

    public function insert(){
        return Person::insert();
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
