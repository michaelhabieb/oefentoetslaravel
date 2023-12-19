<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    public function user()
    {
    	return $this->belongsTo(user::class);
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
