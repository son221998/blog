<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'email',
    'subject',
    'message',
    ];
    public function contacts() {
        return $this->belongsTo(Contact::class);
    }
}
