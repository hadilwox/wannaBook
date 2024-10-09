<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function author()
    {
        $this->belongsTo(Author::class);
    }

    public function comments()
    {
        $this->hasMany(Comment::class);
    }

}
