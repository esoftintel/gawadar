<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    //
    protected $fillable = [
        'at_name','at_st_id','status',
    ];
    protected  $primaryKey = 'at_id';
}
