<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
