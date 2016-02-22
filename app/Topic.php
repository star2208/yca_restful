<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use SoftDeletes;
    protected $hidden = ['deleted_at','created_at','updated_at','is_enable','sort'];
}
