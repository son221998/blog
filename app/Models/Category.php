<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $primaryKey = 'id';
    protected $fillable = [
    'id',
    'title',
    'status'
    ];
    public function category() {
        return $this->belongsTo(Category::class); 
    }
}
