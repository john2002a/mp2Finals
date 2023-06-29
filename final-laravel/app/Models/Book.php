<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $casts = [
        'publication_date' => 'date:YYYY-mm-dd',
        'genre' => 'array'
    ];
    protected $table = 'books';
}
