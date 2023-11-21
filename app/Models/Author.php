<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Author extends Model
{
    use HasFactory;
    protected $table ="authors";
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'email',
    'phone',
    'password'

    ];

}
