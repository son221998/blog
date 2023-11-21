<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Post;

class Like extends Model
{
    use HasFactory;
    protected $table = "likes";
    protected $primaryKey = 'id';
    protected $fillable = [
    'user_id',
    'post_id',
    'likes.item_id',
    'likes.item_type'
    ];
    public function author() {
        return $this->belongsTo(Author::class);
    }
}