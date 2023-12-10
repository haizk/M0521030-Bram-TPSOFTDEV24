<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Book(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'id_author');
    }
}
