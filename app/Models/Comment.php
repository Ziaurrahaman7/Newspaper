<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','post_id','category_id','comment','approved'
    ];
        public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class, 'post_id');
    }
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
}
