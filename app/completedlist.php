<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class completedlist extends Model
{
    //

     protected $table = 'event';

    protected $primaryKey = 'event_id';

    protected $guarded = ['event_id'];

 
}
