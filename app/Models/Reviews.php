<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id', 'reviewer_name', 'rating', 'review_text'
    ];

    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}
