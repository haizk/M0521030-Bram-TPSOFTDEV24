<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
