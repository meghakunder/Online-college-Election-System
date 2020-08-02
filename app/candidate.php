<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    protected $table ='candidate';

    protected $fillable =['name','regno','votes','show','date(Y-m-d)'];

    protected $PrimaryKey ='id';
}
