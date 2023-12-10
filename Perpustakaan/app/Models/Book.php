<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'year',
        'isbn',
        'id_author'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'id_author');
    }

    public function Category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'id_author');
    }
}
