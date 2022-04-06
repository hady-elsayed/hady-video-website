<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'des',
        'meta_keywords',
        'meta_des',
        'youtube',
        'published',
        'user_id',
        'cat_id',
        'image',
        'video_id'
    ];

    public function user (){
       return $this->belongsTo(User::class,'user_id');
    }

    public function category (){
       return $this->belongsTo(Category::class,'cat_id');
    }
    public function skills(){
        return $this->belongsToMany(Skill::class,'skills_videos','video_id');
    }
}
