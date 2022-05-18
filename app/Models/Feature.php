<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'image',
        'title',
        'excerpt',
        'link'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
