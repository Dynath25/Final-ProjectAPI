<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['movie_name', 'description', 'director', 'category_id'];

    // protected $attributes = [
    //     'category_id' => MovieCategory::factory,
    // ];

    public function category()
    {
        return $this->belongsTo(movieCategory::class, 'category_id');
    }
}
