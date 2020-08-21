<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guard = [];

    public function getNameAttribute(){
        return " {$this->surname} {$this->firstname} {$this->lastname}";
    }

    public function getGnameAttribute(){
        return " {$this->gsurname} {$this->gfirstname} {$this->glastname}";
    }

}
