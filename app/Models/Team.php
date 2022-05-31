<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'qualification',
        'department',
        'about',
        'experience',
        'feature_title',
        'feature_excerpt'
    ];

    protected $casts = [
        'experience' => 'date:Y-m-d',
    ];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
