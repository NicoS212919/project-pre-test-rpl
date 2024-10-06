<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'genre',
        'publication_date',
    ];

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'book_id');
    }
}
