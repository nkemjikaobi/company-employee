<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employees(){
       return $this->hasMany(Employee::class);
    }

    protected $fillable = ['name','email','logo','website'];

}
