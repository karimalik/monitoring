<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['team_leader'];

    public function fes()
    {
        return $this->hasMany(FE::class);
    }

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
