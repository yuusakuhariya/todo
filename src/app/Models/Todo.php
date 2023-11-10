<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    

    protected $fillable = ['$attributes', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}