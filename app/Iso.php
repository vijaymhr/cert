<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iso extends Model
{
       //table name
       public $table= 'iso';
       //primary key
       public $primarykey= 'id';
   
       //timestamp
       public $timestamps =true;
}
