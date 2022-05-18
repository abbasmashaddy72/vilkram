<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'name',
        'image',
        'message',
        'stars',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
