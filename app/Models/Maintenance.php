<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'site',
        'reference',
        'status',
        'date',
        'diagnostique',
        'action',
        'observation',
        'comment',
        'image',
        'leave_code',
        'team_id'
    ];

    public function team()
    {
        return $this->hasOne(Team::class);
    }
}
