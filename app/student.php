<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //


     protected $table = 'school';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

 
}
