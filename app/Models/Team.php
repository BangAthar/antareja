<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'team_id');
    }
}
