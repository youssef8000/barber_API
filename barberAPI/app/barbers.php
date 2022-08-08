<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barbers extends Model
{
    protected $table="barbers";
    protected $fillable =['name','phone','address','password','image','image2','categoryId'];
}
