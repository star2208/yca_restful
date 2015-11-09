<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Article extends Model
{
    protected $table = 'articles';
    protected $hidden = ['deleted_at','created_at','updated_at','statu','author_id','author_type','topic_type','topic_id'];
    public function author()
    {
        return $this->morphTo();
    }
    public function topic()
    {
        return $this->morphTo();
    }
    protected $casts = [
        'content' => 'array',
    ];
}
