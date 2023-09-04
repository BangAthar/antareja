<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaivariasi extends Model
{
    protected $fillable = ['team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
