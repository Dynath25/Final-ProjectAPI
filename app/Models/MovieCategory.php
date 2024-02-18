<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function movie()
    {
        return $this->hasMany(Movie::class, 'category_id');
    }
}
