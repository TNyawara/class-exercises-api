<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //properties
    protected $table ='breed';
    protected $primaryKey='breedId';

    //methods
    public function animalType(){
     $this->belongsTo('App\AnimalType','animalTypeId','animalTypeId');
    }
}
