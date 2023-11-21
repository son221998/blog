<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = 'id';
    protected $fillable = [
    'title',
    'content',
    'image',
    'like',
    'active',
    'status',
    'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class); 
    }
}
