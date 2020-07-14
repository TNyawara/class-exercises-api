<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Breed extends Controller
{
    //
    public function getALL(){
        dd(Breed::all());
    }
}
