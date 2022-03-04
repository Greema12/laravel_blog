<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlist extends Model
{
    //


     protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $guarded = ['user_id'];

 
}
