<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //properties
    protected $table ='animal';
    protected $primaryKey='animalId';

    //methods
    public function breed(){
        $this->belongsTo('App\Breed','breedId','breedId');web
    }
}
