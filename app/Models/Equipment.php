<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'picture', 'date', 'team_id'];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
