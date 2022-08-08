<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barberUser extends Model
{
    protected $table="barber_users";
    protected $fillable =['name','age','email','password','address','phone'];
}
