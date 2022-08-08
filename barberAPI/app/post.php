<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table="posts";
    protected $fillable =['price','phone','description','image','status','barberId'];
}
