<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function user(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->belongsTo(User::class);
    }

}
