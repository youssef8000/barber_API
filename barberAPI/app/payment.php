<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table="payments";
    protected $fillable=['postId','userId','data'];
}
