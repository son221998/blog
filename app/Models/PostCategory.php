<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostCategory extends Model
{
    use HasFactory;
    protected $table ="post_category";
    protected $primaryKey = 'id';
    protected $fillable = [
    'title',
    'status'
    ];
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
