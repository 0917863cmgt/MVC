<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Comment extends Model
{
    use HasFactory;

    protected $with=['user','commentlikes'];

    public function highlight(){
        return $this->belongsTo(Highlight::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function commentlikes(){
        return $this->hasMany(CommentLike::class);
    }
}
