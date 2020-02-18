<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
     //table name
     public $table= 'info';
     //primary key
     public $primarykey= 'id';
 
     //timestamp
     public $timestamps =true;
}
