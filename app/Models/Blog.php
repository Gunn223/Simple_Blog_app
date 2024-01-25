<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $table = 'feb_blog';
}
