<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'articles';
    protected $hidden = ['content','deleted_at','created_at','updated_at','statu','author_id','author_type','topic_type','topic_id','accepted','is_homepage','is_headlines'];
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
