<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function grades(){
        return $this->hasMany(Grade::class);
    }
}
