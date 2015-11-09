<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $hidden = ['deleted_at','created_at','updated_at','statu'];
}
